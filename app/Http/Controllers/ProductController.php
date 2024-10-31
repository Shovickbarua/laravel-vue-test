<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\CommonTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use CommonTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return $this->sendResponse(['data' => $products]);
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
        $input = $request->all();
        $product = Product::create($input);
        return $this->sendResponse(['data' => $product, 'message' => 'Product saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $product = Product::find($id);
        $product->update($input);
        return $this->sendResponse(['data' => $product, 'message' => 'Product updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return $this->sendResponse(['message' => 'Product deleted successfully']);
    }
}
