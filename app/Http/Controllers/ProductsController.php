<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=products::all();
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProducts = products::create($data);

        return redirect(route('product.index'));

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
    public function edit(products $product)
    {
       return view('products.edit',['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(products $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('success','product updated susseccfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success','product deleted susseccfully');

    }
}
