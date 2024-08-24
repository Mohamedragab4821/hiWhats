<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Users;
use App\Models\Settings;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function home(){
        $settings = Settings::first();

        return view('home', ['settings' => $settings]);
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
        // dd($request);
        // Validate the input
        $validatedData = $request->validate([
            'userName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:255',
        ]);

        // Create a new user with the validated data and a fixed role value
        $user = Users::create([
            'user_name' => $validatedData['userName'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
            'role' => 'user', // Set the role to 'user'
        ]);

        return redirect()->route('home' ,['user' => $user])->with('success', 'Login successful');
    }

    public function indexProfileSetting()
    {
        return view('dashboard');
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
