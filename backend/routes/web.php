<?php

use Illuminate\Support\Facades\Route;
//products

Route::get('/products',
'App\Http\Controllers\ProductController@productAll');