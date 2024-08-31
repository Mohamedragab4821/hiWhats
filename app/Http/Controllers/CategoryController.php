<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Page;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     */
    public function index($id)
{
    $settings = Settings::first();
    $categories = Category::all();
    $pages = Page::all();

    // If an ID is provided, fetch products belonging to that category
    if ($id) {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->get();
        $pages = Page::all();

        return view('CategoryServices', compact('settings', 'category', 'products', 'categories', 'id','pages'));
    }

    // Handle the case where no ID is provided (optional)
    return view('CategoryServices', compact('settings', 'categories','id','pages'));
}


    public function indexServices()
    {
        $products = Product::all();
        $settings = Settings::first();
        $categories=Category::all();
        $pages = Page::all();

        return view('AllServices', compact('products','settings','categories','pages'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        $pages = Page::all();

        return view('categories.create',['pages'=>$pages]);
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
    // public function show($category_id)
    // {
    //     $category = Category::findOrFail($category_id);
    //     return view('categories.show', compact('category'));
    // }

    public function show(Category $category)
{
    $pages = Page::all();

    // Assuming you pass the category to the view
    return view('CategoryServices', compact('category','pages'));
}

    /**
     * Show the form for editing the specified category.
     */
    public function edit($category_id)
    {
        $category = Category::findOrFail($category_id);
        $pages = Page::all();

        return view('categories.edit', compact('category','pages'));
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
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $categoryId = $request->input('category_id');
        $id=$request->input('category_id');
        // dd($searchTerm, $categoryId); // This should show the search term and the category ID
    
        $settings = Settings::first();
        $categories = Category::all();
        $pages = Page::all();

        $products = Product::where('category_id', $categoryId) // Filter by selected category
            ->where(function($query) use ($searchTerm) {
                $query->where('product_name', 'like', '%' . $searchTerm . '%')
                      ->orWhere('category_name', 'like', '%' . $searchTerm . '%');
            })
            ->get();
    
        return view('CategoryServices', compact('settings', 'products', 'categories','id','pages'));
    }
    
    
public function servicesSearch(Request $request)
{
    $searchTerm = $request->input('search');
    $settings = Settings::first();
    $categories = Category::all();
    $pages = Page::all();


    $products = Product::where('product_name', 'like', '%' . $searchTerm . '%')
        ->orWhere('category_name', 'like', '%' . $searchTerm . '%')
        ->get();

    return view('AllServices', compact('settings', 'products', 'categories','pages'));
}
   
    
}