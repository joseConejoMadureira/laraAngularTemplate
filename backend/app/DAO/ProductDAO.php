<?php
 namespace App\DAO;

use App\Models\Product;

class ProductDAO
{
    function all()
    {
        $product =  new Product();
        return $product = $product::all()->sortBy('id');
    }
    function update($id)
    {
        $product =  new Product();
        //return $product = $product::all()->sortBy('id');
    }
    function delete($id)
    {
        $product =  new Product();
        //return $product = $product::all()->sortBy('id');
    }
    function findById($id)
    {
        $product =  new Product();
        //return $product = $product::all()->sortBy('id');

    }
    function findByName($name)
    {
        $product =  new Product();
        //return $product = $product::all()->sortBy('id');
    }
    function insert($name)
    {
        $product =  new Product();
        //return $product = $product::all()->sortBy('id');
    }
}
