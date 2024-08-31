<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Settings;
use App\Models\Category;
use App\Models\HomeAds;
use App\Models\Page;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::first();
        $categories = Category::all();
        $home_ads = HomeAds::all();
        $pages = Page::all();

        return view('home_ads',['settings'=>$settings,'categories'=>$categories,'home_ads'=>$home_ads,'pages'=>$pages]);
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
        $request->validate([
            'description' => 'required|string|max:1000',
            'end_date' => 'required|string|max:1000',
            'button_url' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        try {
            $filePath = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('ads', $fileName, 'public');
            }

            HomeAds::create([
                'description' => $request->input('description'),
                'end_date' => $request->input('end_date'),
                'button_url' => $request->input('button_url'),
                'image' => $filePath,
            ]);

            return redirect()->route('ads.index')->with('success', 'Ads added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error adding category: ' . $e->getMessage()]);
        }
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
    public function destroy($id)
{
    try {
        $home_ads = HomeAds::findOrFail($id);

        // حذف الصورة من التخزين إذا كانت موجودة
        if ($home_ads->image) {
            Storage::disk('public')->delete($home_ads->image);
        }

        // حذف السجل من قاعدة البيانات
        $home_ads->delete();

        return redirect()->route('ads.index')->with('success', 'Ads Deleted successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['Error deleting Ads: ' . $e->getMessage()]);
    }
}
}