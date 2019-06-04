<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;


/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_products = Product::paginate(15)->toArray();
        return view('admin.products')->with('products', $all_products);
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
     * @param CreateProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {

        Product::create($request->all());

        return redirect()->route('products.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //TODO generate template to show product preview

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product_with_attributes = Product::with('attributes.productAttributes.attributeValue')->where('id', '=', $id)->get()->toArray();

        return view('admin.products')->with(['product_detail' => $product_with_attributes[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Product $id
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

        $product = Product::find($id);

        $product->name = $validatedData['name'];
        $product->sku = $validatedData['sku'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->active = $request->get('active') ? true : false;
        $product->subscribe = $request->get('subscribe') ? true : false;

        $product->save();

        return view('admin.products')->with(['product_detail' => Product::findOrFail($id)]);
    }


    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        //  dd($product);
        $product->delete();
        return redirect()->route('products.index');
    }
}
