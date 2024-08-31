<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\Settings;
use App\Models\Category;
use App\Models\Page;

class FavoritesController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|integer|exists:product,product_id', // Ensure 'products' and 'id' match your database schema
    ]);

    try {
        $userId = Auth::id();
        $favorite = Favorite::where('product_id', $request->product_id)
                            ->where('user_id', $userId)
                            ->first();

        if ($favorite) {
            return response()->json(['message' => 'Product is already in favorites!']);
        }

        Favorite::create([
            'product_id' => $request->product_id,
            'user_id' => $userId
        ]);

        return response()->json(['message' => 'Product added to favorites!']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Failed to add to favorites'], 500);
    }
}

    

    /**
     * Display the user's favorites.
     */
    public function index()
{
    $settings = Settings::first();
    $user = Auth::user();
    $pages = Page::all();
    $categories = Category::all();
    $favorites = Favorite::where('user_id', $user->id)
                         ->with('product') // Eager load the product
                         ->get();
    // Debug the data to ensure it's fetched correctly
    // dd($favorites);
    return view('favorites', compact('favorites', 'settings', 'categories','pages'));
}


    public function destroy($id)
{
    try {
        $favorite = Favorite::where('id', $id)->where('user_id', Auth::id())->first();
        
        if ($favorite) {
            $favorite->delete();
            return response()->json(['success' => true, 'message' => 'Favorite removed successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Favorite not found.'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'message' => 'Error removing favorite.'], 500);
    }
}

    

}
