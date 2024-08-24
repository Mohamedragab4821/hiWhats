<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Users;
use App\Models\Settings;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function home()
{
    $products = Product::all(); // Fetch all products from the database
    $settings = Settings::first(); // Fetch the settings
    $categories=Category::all();

    return view('home', [
        'products' => $products,
        'settings' => $settings,
        'categories'=>$categories
    ]);
}
public function logout(Request $request)
{
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate the CSRF token
    $request->session()->regenerateToken();

    // Redirect to the login page or any other page
    return redirect()->route('home');
}
    public function login(Request $request)
{
    $validatedData = $request->validate([
        'email' => 'required|string|email|max:255',
        'password' => 'required|string|min:8',
    ]);

    if (Auth::attempt([
        'email' => $validatedData['email'],
        'password' => $validatedData['password']
    ])) {
        $user = Auth::user();
        // احصل على المستخدم بعد تسجيل الدخول بنجاح
        return redirect()->route('home', ['user' => $user])->with('success', 'Login successful');
    } else {
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}


public function Registeration(Request $request)
{
    Log::info('Register method called', $request->all());

    // Validate the input, including the image
    $validatedData = $request->validate([
        'userName' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'phone' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
    ]);

    // Handle the image upload if provided
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('profile_images', 'public');
    }

    // Create a new user with the validated data and a fixed role value
    $user = Users::create([
        'user_name' => $validatedData['userName'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'phone' => $validatedData['phone'],
        'image' => $imagePath, // Store the image path in the database
    ]);

    return redirect()->route('home', ['user' => $user])->with('success', 'Registration successful');
}

    public function indexProfileSetting()
    {
        $settings = Settings::first();
        $categories = Category::all();


        return view('dashboard',['settings'=>$settings,'categories'=>$categories]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
