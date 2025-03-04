<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('products.index',["title"=>"products", 'products'=>Product::with("categories")->orderBy("created_at",'desc')->paginate(5) ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create',["title"=>"New product" ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('products.show',["title"=>"ITEMS TITLE", 'product'=>Product::findOrFail($id) ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit',["title"=>"Edit product", 'product'=>Product::findOrFail($id) ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route("products.show",$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route("products.index");
        // return 
        //
    }
}
