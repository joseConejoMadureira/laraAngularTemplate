<?php

namespace App\Http\Controllers;

use App\DAO\ProductDAO;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::debug('index');
        return response()->json($this->product->all(), 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->product->rules());
        $product = $this->product->create($request->all());

        return response()->json($product, 201);
    }
    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->find($id);
        if ($product === null) {
            return response()->json(['erro' => 'Recurso  não existe'], 404);
        }

        return response()->json($product, 200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->product->rules());

        $product = $this->product->find($id);
        if ($product === null) {
            return response()->json(['erro' => 'Recurso  não existe'], 404);
        }
        $product->update($request->all());

        return response()->json($product, 200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product = $this->product->find($id);
        if ($product === null) {
            return response()->json(['erro' => 'Recurso  não existe'], 404);
        }
        $product->delete();
        return response()->json(['msg' => 'removido com sucesso!'], 200);
    }
    public function abcde()
    {
        return json_encode("teste");
    }
}
