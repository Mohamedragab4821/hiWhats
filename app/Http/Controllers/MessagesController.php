<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Contacts;
use App\Models\Category;
use App\Models\Page;


class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $settings = Settings::first();
        $pages = Page::all();

        
        // Search query
        $query = $request->input('search');
        
        $categories = Category::all();

        // Fetch contacts with search and pagination
        $contacts = Contacts::where('name', 'LIKE', "%{$query}%")
                            ->orWhere('email', 'LIKE', "%{$query}%")
                            ->orWhere('phone', 'LIKE', "%{$query}%")
                            ->orWhere('message', 'LIKE', "%{$query}%")
                            ->orWhere('product', 'LIKE', "%{$query}%")
                            ->paginate(10); // 10 items per page
    
        return view('messages', ['settings' => $settings,'pages'=>$pages, 'contacts' => $contacts,'categories'=>$categories]);
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
}
