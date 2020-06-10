<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index()
    {
        return view('shops.index')
            ->with('products', Product::all()->simplePaginate(9))
            ->with('categories', Category::all());
    }

}
