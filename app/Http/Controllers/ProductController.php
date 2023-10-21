<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($id){
        //* eloquent orm
        //* query builder
        //* raw query

        $product = Product::select('id', 'name');

        // dd($product);
        return view('product', [
            'productlist' => $product
        ]);
    }
}
