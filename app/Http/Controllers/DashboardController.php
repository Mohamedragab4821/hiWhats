<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Settings;
use App\Models\Category;
use App\Models\HomeAds;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource (Dashboard overview).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $settings = Settings::first();
        $categories = Category::all();

        return view('dashboard',['settings'=>$settings,'categories'=>$categories]);
    }
    public function index_home_ads()
    {
        $settings = Settings::first();
        $categories = Category::all();
        $home_ads = HomeAds::all();

        return view('home_ads',['settings'=>$settings,'categories'=>$categories,'home_ads'=>$home_ads]);
    }

    public function indexEditUser($id)
    {
        $user = Users::findOrFail($id);
        $settings = Settings::first();
        $categories = Category::all();
        return view('editUser',['user'=>$user,'categories'=>$categories,'settings'=>$settings]);
    }

    public function indexUserManagement()
    {
        $users = Users::all();
        $settings = Settings::first();
        $categories = Category::all();
        return view('userManagement',['users'=>$users,'categories'=>$categories,'settings'=>$settings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Logic to show a form to create a new resource
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Logic to store a new resource
        // Example: Dashboard::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Resource created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Logic to display a specific resource
        // Example: $resource = Dashboard::findOrFail($id);

        return view('dashboard.show', compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        // Logic to show the edit form for a specific resource
        // Example: $resource = Dashboard::findOrFail($id);

        return view('dashboard.edit', compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Logic to update a specific resource
        // Example: $resource = Dashboard::findOrFail($id);
        // $resource->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Resource updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return redirect()->route('userManagement')->with('success', 'User deleted successfully.');
    }



    // public function updateAvatar(Request $request)
    // {
    //     $request->validate([
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $user = Auth::user();

    //     if ($request->hasFile('image')) {
    //         // Delete old image if exists
    //         if ($user->image) {
    //             Storage::disk('public')->delete($user->image);
    //         }

    //         // Store new image
    //         $imagePath = $request->file('image')->store('profile_images', 'public');
    //         $user->image = $imagePath;
    //         $user->save();
    //     }

    //     return redirect()->back()->with('success', 'Avatar updated successfully.');
    // }

    // Method to handle avatar deletion
    public function updateProfile(Request $request)
{
    $request->validate([
        'user_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    // Update user information
    $user->user_name = $request->input('user_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    // Handle the image upload if provided
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        // Store new image
        $imagePath = $request->file('image')->store('profile_images', 'public');
        $user->image = $imagePath;
    }

    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}



public function updateUser(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'user_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Find the user by ID
    $user = Users::find($id);

    if (!$user) {
        return redirect()->back()->withErrors('User not found.');
    }

    // Update user information
    $user->user_name = $request->input('user_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');

    // Handle the image upload if provided
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image) {
            Storage::disk('public')->delete($user->image);
        }

        // Store new image
        $imagePath = $request->file('image')->store('profile_images', 'public');
        $user->image = $imagePath;
    }

    // Save the updated user
    $user->save();

    return redirect()->back()->with('success', 'Profile updated successfully.');
}




public function deleteAvatar(Request $request)
{
    $user = Users::findOrFail($request->input('user_id'));

    // Delete the avatar image if it exists
    if ($user->image) {
        Storage::disk('public')->delete($user->image);
        $user->image = null;
        $user->save();
    }

    return redirect()->back()->with('success', 'Avatar deleted successfully.');
}



}
