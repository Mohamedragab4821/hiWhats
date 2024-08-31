<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Settings;
use App\Models\Page;

class PagesController extends Controller
{
    /**
     * Show the form for creating a new page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $settings = Settings::first();
        $categories = Category::all();
        $pages = Page::all();

        return view('addPage',['settings'=>$settings,'categories'=>$categories,'pages'=>$pages]);
    }

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'published')->firstOrFail();
        $pages = Page::all();

        $settings = Settings::first();
        $categories = Category::all();

        return view('pages.show', compact('page','settings','categories','pages'));
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');

            return response()->json(['location' => asset('storage/' . $path)]);
        }

        return response()->json(['error' => 'Failed to upload image'], 400);
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
        try{
        $request->validate(Page::rules());

        // Create a new page using mass assignment
        $page = Page::create($request->all());

        // Redirect with a success message
        return redirect()->route('pages.index')->with('success', 'Category deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error Adding Page: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */


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
    public function update(Request $request, $id)
    {
        try{
        // Validate the incoming request

        // Find the page and update it
        $page = Page::findOrFail($id);
        $page->update($request->all());

        // Redirect with a success message
        return redirect()->route('pages.index')->with('success', 'Page updated successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['Error Adding Page: ' . $e->getMessage()]);
    }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على الصفحة بناءً على الـ slug
        $page = Page::where('id', $id)->firstOrFail();
        
        // حذف الصفحة
        $page->delete();

        // إعادة التوجيه إلى قائمة الصفحات مع رسالة نجاح
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
