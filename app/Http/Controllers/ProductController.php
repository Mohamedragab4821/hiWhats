<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

    public function indexcategoryMangement()
    {
        $category = Category::all();
        $categories = Category::all();
        $settings = Settings::first();

        return view('CategoryMangement',['category'=>$category,'settings'=>$settings,'categories'=>$categories]);
    }

    public function indexproductMangement()
    {
        $products = Product::all();
        $settings = Settings::first();
        $categories = Category::all();

        return view('ProductMangement', ['products' => $products,'settings'=>$settings,'categories'=>$categories]);
    }



    public function storeProduct(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'category_name' => 'required|string|max:255',
            'product_salary' => 'required|numeric',
            'description' => 'required|string',
            'Duration_of_righteousness' => 'required|string|max:255',
            'Product_img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        try {
            $imagePath = $request->file('Product_img')->store('product_images', 'public');
    
            $product = new Product($validatedData);
            $product->Product_img = $imagePath;
            $product->save();
    
            return redirect()->route('productMangement')->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['Error adding product: ' . $e->getMessage()]);
        }
    }
    

    public function deleteProduct($product_id){
        $product = Product::where('product_id',$product_id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // Delete the image file
        // if ($product->Product_img && Storage::exists('public/' . $product->Product_img)) {
        //     Storage::delete('public/' . $product->Product_img);
        // }

        // Delete the product record
        $product->delete();

        return redirect()->route('productMangement')->with('success', 'Product delete successfully!');
    }


    public function updateProduct(Request $request, $product_id)
    {
        // Validate the request
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'category_name' => 'required|string|max:255',
            'product_salary' => 'required|numeric',
            'description' => 'required|string|max:1000',
            'Duration_of_righteousness' => 'required|string|max:255',
        ]);

        // Find the product by ID
        $product = Product::where('product_id', $product_id)->first();

        if (!$product) {
            return redirect()->back()->withErrors(['Product not found.']);
        }

        // Check if a new image is uploaded
        if ($request->hasFile('Product_img')) {
            // Handle the new image upload
            $file = $request->file('Product_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('products', $fileName, 'public');

            // Update the product image path in the database
            $product->Product_img = $filePath;
        } else {
            // Keep the old image if no new one is uploaded
            $product->Product_img = $request->input('current_image');
        }

        // Update other product fields
        $product->product_name = $request->input('product_name');
        $product->category_id = $request->input('category_id');
        $product->category_name = $request->input('category_name');
        $product->product_salary = $request->input('product_salary');
        $product->description = $request->input('description');
        $product->Duration_of_righteousness = $request->input('Duration_of_righteousness');

        // Save the updated product
        $product->save();

        // Redirect back with success message
        return redirect()->route('productMangement')->with('success', 'Product updated successfully!');
    }


    public function storeCategory(Request $request)
{
    // Validate the request
    $request->validate([
        'category_name' => 'required|string|max:255',
        'category_description' => 'required|string|max:1000',
        'category_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
    ]);

    // Handle the image upload
    $filePath = null;
    if ($request->hasFile('category_img')) {
        $file = $request->file('category_img');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('categories', $fileName, 'public');
    }

    // Create the category
    $category = new Category();
    $category->category_name = $request->input('category_name');
    $category->category_description = $request->input('category_description');
    $category->category_img = $filePath; // Save the image path if an image was uploaded
    $category->save();

    // Redirect back with a success message
    return redirect()->route('categoryMangement')->with('success', 'Category added successfully!');
}


}
