<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    /**
     * Display the settings form.
     */
    public function index()
    {
        // Retrieve the first record from the settings table, or null if no record exists
        $settings = Settings::first();

        // Pass the settings to the view
        return view('settings', ['settings' => $settings]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            // Validate the incoming request
            $validatedData = $request->validate([
                'website_name' => 'required|string|max:255',
                'website_description' => 'nullable|string|max:1000',
                'home_meta_k' => 'nullable|string|max:1000',
                'home_meta_d' => 'nullable|string|max:1000',
                'product_meta_k' => 'nullable|string|max:1000',
                'product_meta_d' => 'nullable|string|max:1000',
                'category_meta_k' => 'nullable|string|max:1000',
                'category_meta_c' => 'nullable|string|max:1000',
                'facebook_url' => 'nullable|string|max:1000',
                'twitter_url' => 'nullable|string|max:1000',
                'insta_url' => 'nullable|string|max:1000',
                'youtube_url' => 'nullable|string|max:1000',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Find the settings model or create a new one
            $settings = Settings::first() ?? new Settings();

            // Update the settings model with validated data
            $settings->website_name = $validatedData['website_name'];
            $settings->website_description = $validatedData['website_description'];
            $settings->home_meta_k = $validatedData['home_meta_k'];
            $settings->home_meta_d = $validatedData['home_meta_d'];
            $settings->product_meta_k = $validatedData['product_meta_k'];
            $settings->product_meta_d = $validatedData['product_meta_d'];
            $settings->category_meta_k = $validatedData['category_meta_k'];
            $settings->category_meta_c = $validatedData['category_meta_c'];
            $settings->facebook_url = $validatedData['facebook_url'];
            $settings->twitter_url = $validatedData['twitter_url'];
            $settings->insta_url = $validatedData['insta_url'];
            $settings->youtube_url = $validatedData['youtube_url'];

            // Handle the logo file upload
            if ($request->hasFile('logo')) {
                if ($settings->logo) {
                    Storage::delete($settings->logo);
                }
                $path = $request->file('logo')->store('public/logos');
                $settings->logo = str_replace('public/', '', $path); // إزالة 'public/' من المسار
            }
            
            // Handle the icon file upload
            if ($request->hasFile('icon')) {
                if ($settings->icon) {
                    Storage::delete($settings->icon);
                }
                $path = $request->file('icon')->store('public/icons');
                $settings->icon = str_replace('public/', '', $path); // إزالة 'public/' من المسار
            }

            // Save the updated settings
            $settings->save();

            return redirect()->back()->with('success', 'Settings updated successfully!');
        } catch (\Exception $e) {
            // Log the exception message
            Log::error('Error updating settings: ' . $e->getMessage());

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
