<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_products = Product::paginate(5);
        return view('admin.products')->with('products',$all_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //should be unique sku (name?)
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

      //  dd($request);

        $product = new Product;

        $product->name = $validatedData['name'];
        $product->sku = $validatedData['sku'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->active = $request->get('active') ? true : false;
        $product->subscribe = $request->get('subscribe') ? true : false;

        $product->save();

        return redirect()->route('products');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO generate template to show product preview

        //dd($id);
        //return view('admin.products', ['product' => Product::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.products', ['product_detail' => Product::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //should be unique sku (name?)
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

     //   dd($validatedData);
        $product = Product::find($id);

        $product->name = $validatedData['name'];
        $product->sku = $validatedData['sku'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->active = $request->get('active') ? true : false;
        $product->subscribe = $request->get('subscribe') ? true : false;

        $product->save();

        return view('admin.products', ['product_detail' => Product::findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        dd('delete route');
        return redirect()->route('products');
    }
}
