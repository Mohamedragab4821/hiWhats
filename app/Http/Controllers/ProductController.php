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
        $category = Category::all();
        // $category1 = Category::all();

        $categories = Category::all();

        return view('ProductMangement', ['products' => $products,'settings'=>$settings,'category'=>$category,'category1'=>$category,'categories'=>$categories]);
    }



    public function storeProduct(Request $request)
{
    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'category_name' => 'required|string|max:255', // We'll use the category name to find the category ID
        'product_salary' => 'required|numeric',
        'description' => 'required|string',
        'Duration_of_righteousness' => 'required|string|max:255',
        'Product_img' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Ensure the image is valid
    ]);

    // Handle the image upload
    if ($request->hasFile('Product_img')) {
        $imagePath = $request->file('Product_img')->store('product_images', 'public');
    }

    // Find the category by name and retrieve its ID
    $category = Category::where('category_name', $validatedData['category_name'])->first();

    if (!$category) {
        // Handle the case where the category is not found
        return redirect()->back()->withErrors(['category_name' => 'Category not found.']);
    }

    // Create a new product record in the database
    $product = new Product();
    $product->product_name = $validatedData['product_name'];
    $product->category_id = $category->category_id; // Store the category ID
    $product->category_name = $category->category_name; // Optionally, you can store the category name too
    $product->product_salary = $validatedData['product_salary'];
    $product->description = $validatedData['description'];
    $product->Duration_of_righteousness = $validatedData['Duration_of_righteousness'];
    $product->Product_img = $imagePath ?? null; // Store the image path in the database
    $product->save();

    // Return a success response
    return redirect()->route('productMangement')->with('success', 'Product added successfully!');
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
        $categories = Category::all();
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'category_name' => 'required|string|max:255', // Validate category_name (category_id is derived)
            'product_salary' => 'required|numeric',
            'description' => 'required|string|max:1000',
            'Duration_of_righteousness' => 'required|string|max:255',
        ]);

        // Find the product by ID
        $product = Product::where('product_id', $product_id)->first();

        if (!$product) {
            return redirect()->back()->withErrors(['Product not found.']);
        }

        // Find the category by name and retrieve its ID
        $category = Category::where('category_name', $validatedData['category_name'])->first();

        if (!$category) {
            // Handle the case where the category is not found
            return redirect()->back()->withErrors(['category_name' => 'Category not found.']);
        }

        // Check if a new image is uploaded
        if ($request->hasFile('Product_img')) {
            // Handle the new image upload
            $file = $request->file('Product_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('products', $fileName, 'public');

            // Update the product image path in the database
            $product->Product_img = $filePath;
        }

        // Update other product fields
        $product->product_name = $validatedData['product_name'];
        $product->category_id = $category->category_id; // Use the category ID found from the name
        $product->category_name = $category->category_name; // Optionally, you can keep the category name too
        $product->product_salary = $validatedData['product_salary'];
        $product->description = $validatedData['description'];
        $product->Duration_of_righteousness = $validatedData['Duration_of_righteousness'];

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


public function destroyCategory($id)
{
    // Find the product by ID
    $Category = Category::findOrFail($id);

    // Delete the product
    $Category->delete();

    // Redirect back with success message
    return redirect()->route('categoryMangement')->with('success', 'Category deleted successfully!');
}


public function updateCategory(Request $request, $category_id)
{
    // dd($request);
    // Validate the request
    $request->validate([
        'category_name' => 'required|string|max:255',
        'category_img' => 'sometimes|file|image|max:2048',
        'category_description' => 'required|string|max:1000',
    ]);

    // Find the category by ID
    $category = Category::find($category_id);

    if (!$category) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    // Update category attributes
    $category->category_name = $request->input('category_name');
    $category->category_description = $request->input('category_description');

    // Check if a new image is uploaded
    if ($request->hasFile('category_img')) {
        // Handle the new image upload
        $file = $request->file('category_img');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('categories', $fileName, 'public');

        // Update the category image path in the database
        $category->category_img = $filePath;
    }

    // Save the updated category
    $category->save();

    return redirect()->route('categoryMangement')->with('success', 'Category updated successfully!');
}


}
