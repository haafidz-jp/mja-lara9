<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index_view ()
    {
        return view('pages.product.product-data', [
            'product' => Product::class
        ]);
    }
}
