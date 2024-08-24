<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
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
        return view('CategoryMangement');
    }

    public function indexproductMangement()
    {
        $products = Product::all();
        return view('ProductMangement', ['products' => $products]);
    }



    public function storeProduct(Request $request){
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'category_name' => 'required|string|max:255',
            'product_salary' => 'required|numeric',
            'description' => 'required|string',
            'Duration_of_righteousness' => 'required|string|max:255',
            'Product_img' => 'required|image|mimes:jpg,jpeg,png|max:2048', // Ensure the image is valid
        ]);

        // Handle the image upload
        if ($request->hasFile('Product_img')) {
            $imagePath = $request->file('Product_img')->store('product_images', 'public');
        }

        // Create a new product record in the database
        $product = new Product();
        $product->product_name = $validatedData['product_name'];
        $product->category_id = $validatedData['category_id'];
        $product->category_name = $validatedData['category_name'];
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

}
