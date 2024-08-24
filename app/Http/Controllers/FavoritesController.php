<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Favorite;
use App\Models\Settings;

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
        $favorites = Favorite::where('user_id', $user->id)
                             ->with('product')
                             ->get();

        return view('favorites', compact('favorites','settings'));
    }

    public function destroy($id)
    {
        try {
            $favorite = Favorite::findOrFail($id);
            $favorite->delete();
            return response()->json(['message' => 'Favorite removed successfully.']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error removing favorite.'], 500);
        }
    }
    

}
