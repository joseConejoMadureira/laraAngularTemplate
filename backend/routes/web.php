<?php

use Illuminate\Support\Facades\Route;

Route::get('/productAll',
'App\Http\Controllers\ProductController@productAll');