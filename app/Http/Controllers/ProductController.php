<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return view('product.productlist')->with('products',$products);
    }

    public function productCreate()
    {
        return view('product.productcreate');
    }

    public function productCreateSubmit(Request $rqst)
    {
        $val=$rqst->validate(
            [
                'name'=>'required|min:3|string',
                'code'=>'required|min:3|integer',
                'desc'=>'required|min:10|string',
                'category'=>'required|min:3|string',
                'price'=>'required|integer',
                'quantity'=>'required|integer',
                'stockdate'=>'required',
                'rating'=>'required',
                'purchased'=>'required|integer'
            ]
            );
            $var=new Product();
            $var->p_name=$rqst->name;
            $var->p_code=$rqst->code;
            $var->p_desc=$rqst->desc;
            $var->p_category=$rqst->category;
            $var->p_price=$rqst->price;
            $var->p_quantity=$rqst->quantity;
            $var->p_stockdate=$rqst->stockdate;
            $var->p_rating=$rqst->rating;
            $var->p_purchased=$rqst->purchased;
            $var->save();
            return redirect()->route('productlist');
    }

    public function productEdit(Request $rqst)
    {
        $id=$rqst->id;
        $var=Product::where('id',$id)->first();
        return view('product.productedit')->with('product',$var);
    }

    public function productEditSubmit(Request $rqst)
    {
        $var=$rqst->validate(
            [
                'name'=>'required|min:3|string',
                'code'=>'required|min:3|integer',
                'desc'=>'required|min:10|string',
                'category'=>'required|min:3|string',
                'price'=>'required|integer',
                'quantity'=>'required|integer',
                'stockdate'=>'required',
                'rating'=>'required',
                'purchased'=>'required|integer'
            ]
            );
            $var=Product::where('id',$rqst->id)->first();
            $var->p_name=$rqst->name;
            $var->p_code=$rqst->code;
            $var->p_desc=$rqst->desc;
            $var->p_category=$rqst->category;
            $var->p_price=$rqst->price;
            $var->p_quantity=$rqst->quantity;
            $var->p_stockdate=$rqst->stockdate;
            $var->p_rating=$rqst->rating;
            $var->p_purchased=$rqst->purchased;
            $var->save();
            return redirect()->route('productlist');
    }

    public function productDetails(Request $rqst)
    {
        $product=Product::where('id', $rqst->id)->first();
        return view('product.productdetails')->with('product',$product);
    }

    public function productDelete(Request $rqst)
    {
        $var=Product::where('id',$rqst->id)->first();
        $var->delete();
        return redirect()->route('productlist');
    }
}
