<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Contacts;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::first();

        $categories = Category::all();

        return view('contacts',['settings'=>$settings,'categories'=>$categories]);

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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'message' => 'required|string',

        ]);
        $validatedData['user_id']=Auth::user()->id;

        try {
            Contacts::create($validatedData);
            return redirect()->back()->with('success',  'تم إرسال رسالتك بنجاح!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
       
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
