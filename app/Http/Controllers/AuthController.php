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
use App\Models\HomeAds;
use App\Models\Page;
use App\Models\Favorite;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function home()
{
    $products = Product::orderBy('created_at', 'desc')->paginate(4);
    $settings = Settings::first(); // Fetch the settings
    $categories = Category::orderBy('created_at', 'desc')->paginate(4);
    $HomeAds=HomeAds::all();
    $pages = Page::all();
    $user = Auth::user();
    if(Auth::user()){
    foreach ($products as $product) {
        // Check if the product is in the favorites table for the current user
        $isFavorite = Favorite::where('user_id', $user->id)
                            ->where('product_id', $product->product_id)
                            ->exists();

        // Add the is_fav property to each product
        $product->is_fav = $isFavorite;
    }
}


    return view('home', [
        'products' => $products,
        'settings' => $settings,
        'categories'=>$categories,
        'HomeAds'=>$HomeAds,
        'pages'=>$pages
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
        // After successful login, redirect to home with a success message
        return redirect()->route('home')->with('success', 'Login successful');
    } else {
        // Redirect back with an error message if login fails
        return redirect()->back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
}



public function Registeration(Request $request)
{
    Log::info('Register method called', $request->all());

    // Validate the input, including the image
    $validatedData = $request->validate([
        'userName' => 'nullable|string|max:255',
        'email' => 'nullable|string|email|max:255|unique:users',
        'password' => 'nullable|string|min:8',
        'phone' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000', // Image validation
        // 'access' => 'nullable|string|max:255', // Remove this if you don't need user to provide 'access'
    ]);

    // Handle the image upload if provided
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('profile_images', 'public');
    }

    // Create a new user with the validated data and default access as "User"
    $user = Users::create([
        'user_name' => $validatedData['userName'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'phone' => $validatedData['phone'],
        'image' => $imagePath, // Store the image path in the database
        'access' => 'User', // Set the default access level to "User"
    ]);

    return redirect()->route('home', ['user' => $user])->with('success', 'Registration successful');
}


    public function indexProfileSetting()
    {
        $settings = Settings::first();
        $categories = Category::all();
        $pages = Page::all();


        return view('dashboard',['settings'=>$settings,'categories'=>$categories,'pages'=>$pages]);
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