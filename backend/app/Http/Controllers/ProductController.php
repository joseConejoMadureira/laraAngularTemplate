<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\DAO\ProductDAO;

class ProductController extends Controller
{
    //
    function productAll()
    {
       $product = new  ProductDAO();
       return $product->all();

    }
}