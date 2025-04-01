<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Ma'lumotlar muvaffaqiyatli qo'shildi!";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }


    
    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $Product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'discount' => $request->discount
        ]);

        // return redirect()->route('products.index', compact('products')) ;
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