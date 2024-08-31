<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Support\Facades\Storage;
use App\Models\Page;

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
        $category = Category::paginate(5);
        $categories = Category::paginate(5);
        $settings = Settings::first();
        $pages = Page::all();


        return view('CategoryMangement',['category'=>$category,'settings'=>$settings,'categories'=>$categories,'pages'=>$pages]);
    }

    public function indexproductMangement()
{
    $products = Product::with('category')->paginate(5);
    $settings = Settings::first();
    $categories = Category::all();
    $pages = Page::all();

    return view('ProductMangement', [
        'products' => $products,
        'settings' => $settings,
        'categories' => $categories,
        'pages' => $pages
    ]);
}



    public function storeProduct(Request $request)
{

    $validatedData = $request->validate([
        'product_name' => 'required|string|max:255',
        'category_id' => 'required|numeric', // Validate that the category ID exists in the categories table
        'product_salary' => 'required|numeric',
        'description' => 'required|string',
        'Duration_of_righteousness' => 'required|string|max:255',
        'Product_img' => 'required|image|mimes:jpg,jpeg,png|max:10000', // Ensure the image is valid
    ]);
    // dd('sss');
    // Handle the image upload
    if ($request->hasFile('Product_img')) {
        $imagePath = $request->file('Product_img')->store('product_images', 'public');
    }

    // Find the category by ID
    $category = Category::find($validatedData['category_id']);

    if (!$category) {
        // Handle the case where the category is not found
        return redirect()->back()->withErrors(['category_id' => 'Category not found.']);
    }

    // Create a new product record in the database
    $product = new Product();
    $product->product_name = $validatedData['product_name'];
    $product->category_id = $category->id; // Store the category ID
    $product->category_name = $category->category_name; // Optionally, you can store the category name too
    $product->product_salary = $validatedData['product_salary'];
    $product->description = $validatedData['description'];
    $product->Duration_of_righteousness = $validatedData['Duration_of_righteousness'];
    $product->Product_img = $imagePath ?? null; // Store the image path in the database
    $product->save();

    // Return a success response
    return redirect()->route('productMangement')->with('success', 'Product added successfully!');
}


public function deleteProduct($id)
{
    $product = Product::findOrFail($id); // Find the product by ID
// dd($product->Product_img); // This will stop execution and print the value of Product_img

    // Check if the product has an image and if it exists in the storage
    if ($product->Product_img && Storage::disk('public')->exists('/' . $product->Product_img)) {
        // dd('here');
        Storage::disk('public')->delete('/' . $product->Product_img); // Delete the image
    }

    // Now delete the product
    $product->delete();

    // Redirect back with success message
    return redirect()->route('productMangement')->with('success', 'Product and image deleted successfully!');
}



    public function updateProduct(Request $request, $product_id)
    {
        // dd($request);
        // Validate the request
        $categories = Category::all();
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|max:255',
            'product_salary' => 'required|numeric',
            'description' => 'required|string|max:1000',
            'Duration_of_righteousness' => 'required|string|max:255',
        ]);

        // Find the product by ID
        $product = Product::where('product_id', $product_id)->first();

        if ($product->Product_img && Storage::disk('public')->exists('/' . $product->Product_img)) {
            // dd('here');
            Storage::disk('public')->delete('/' . $product->Product_img); // Delete the image
        }

        if ($request->hasFile('Product_img')) {
            $imagePath = $request->file('Product_img')->store('product_images', 'public');
        }

        if (!$product) {
            return redirect()->back()->withErrors(['Product not found.']);
        }


        // Find the category by name and retrieve its ID
        $category = Category::where('category_id', $validatedData['category_id'])->first();

        if (!$category) {
            // Handle the case where the category is not found
            return redirect()->back()->withErrors(['category_name' => 'Category not found.']);
        }

        // Check if a new image is uploaded
        // if ($request->hasFile('Product_img')) {
        //     // Handle the new image upload
        //     $file = $request->file('Product_img');
        //     $fileName = time() . '_' . $file->getClientOriginalName();
        //     $filePath = $file->storeAs('products', $fileName, 'public');

        //     // Update the product image path in the database
        //     $product->Product_img = $filePath;
        // }

        // Update other product fields
        $product->product_name = $validatedData['product_name'];
        $product->category_id = $category->category_id; // Use the category ID found from the name
        $product->category_name = $category->category_name; // Optionally, you can keep the category name too
        $product->product_salary = $validatedData['product_salary'];
        $product->description = $validatedData['description'];
        $product->Duration_of_righteousness = $validatedData['Duration_of_righteousness'];
        $product->Product_img = $imagePath ?? null;
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
    // Find the category by ID
    $category = Category::findOrFail($id);

    // Check if the category has an image and if it exists in the storage
    if ($category->category_img && Storage::disk('public')->exists('/' . $category->category_img)) {
        // Delete the image from storage
        // dd('here');
        Storage::disk('public')->delete('/' . $category->category_img);
    }

    // Delete the category
    $category->delete();

    // Redirect back with success message
    return redirect()->route('categoryMangement')->with('success', 'Category and image deleted successfully!');
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
    
    if ($category->category_img && Storage::disk('public')->exists('/' . $category->category_img)) {
        // Delete the image from storage
        // dd('here');
        Storage::disk('public')->delete('/' . $category->category_img);
    }

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

public function ProductSearch(Request $request)
{
    // dd('www');
    $searchTerm = $request->input('search');
    $settings = Settings::first();
    $categories = Category::all();
    $category1 = Category::all();

    $products = Product::where('product_name', 'like', '%' . $searchTerm . '%')
        ->orWhere('category_name', 'like', '%' . $searchTerm . '%')
        ->paginate(5);

    return view('ProductMangement', compact('settings', 'products', 'categories','category1'));
}
public function CategorySearch(Request $request)
{
    // dd('www');
    $searchTerm = $request->input('search');
    $settings = Settings::first();
    // $categories = Category::all();
    // $category1 = Category::all();


    $categories = Category::where('category_name', 'like', '%' . $searchTerm . '%')
        // ->orWhere('category_name', 'like', '%' . $searchTerm . '%')
        ->paginate(5);

    $category = Category::where('category_name', 'like', '%' . $searchTerm . '%')
        // ->orWhere('category_name', 'like', '%' . $searchTerm . '%')
        ->paginate(5);

    return view('CategoryMangement', compact('settings', 'categories','category'));
}


}
