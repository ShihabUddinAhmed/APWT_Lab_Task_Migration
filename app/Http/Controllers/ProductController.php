<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        return view('product.productlist');
    }

    public function productCreate()
    {
        return view('product.productcreate');
    }

    public function productEdit()
    {
        return view('product.productedit');
    }

    public function productDetails()
    {
        return view('product.productdetails');
    }
}
