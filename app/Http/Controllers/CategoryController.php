<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index($id)
{
    $settings = Settings::first();
    $categories=Category::all();

    // If an ID is provided, fetch products belonging to that category
    if ($id) {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        return view('CategoryServices', compact('settings', 'category', 'products','categories','id'));
    }

    // If no ID is provided, just return all categories
    // $categories = Category::all();
    // return view('CategoryServices', compact('settings', 'categories'));
}


    public function indexServices()
    {
        $products = Product::all();
        $settings = Settings::first();
        $categories=Category::all();
        return view('AllServices', compact('products','settings','categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created category in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:1000',
            'category_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $filePath = null;
            if ($request->hasFile('category_img')) {
                $file = $request->file('category_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('categories', $fileName, 'public');
            }

            Category::create([
                'category_name' => $request->input('category_name'),
                'category_description' => $request->input('category_description'),
                'category_img' => $filePath,
            ]);

            return redirect()->route('categories.index')->with('success', 'Category added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error adding category: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified category.
     */
    public function show($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     */
    public function edit($category_id)
    {
        $category = Category::findOrFail($category_id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     */
    public function update(Request $request, $category_id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string|max:1000',
            'category_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $category = Category::findOrFail($category_id);

            if ($request->hasFile('category_img')) {
                $file = $request->file('category_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('categories', $fileName, 'public');
                $category->category_img = $filePath;
            }

            $category->update([
                'category_name' => $request->input('category_name'),
                'category_description' => $request->input('category_description'),
                'category_img' => $category->category_img, // Keep existing image if no new one is uploaded
            ]);

            return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error updating category: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified category from storage.
     */
    public function destroy($category_id)
    {
        try {
            $category = Category::findOrFail($category_id);

            if ($category->category_img && \Storage::exists('public/' . $category->category_img)) {
                \Storage::delete('public/' . $category->category_img);
            }

            $category->delete();

            return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error deleting category: ' . $e->getMessage()]);
        }
    }
}
