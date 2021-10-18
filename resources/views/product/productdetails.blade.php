@extends('layouts.productform')

@section('title')
    Product Details
@endsection

@section('form')
    <div>
        <table class="table table-responsive">
            <tr>
                <td>Product Name:</td>
                <td>
                    {{ $product->p_name }}
                </td>
            </tr>
            <tr>
                <td>Product Code:</td>
                <td>
                    {{ $product->p_code }}
                </td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td>
                    {{ $product->p_desc }}
                </td>
            </tr>
            <tr>
                <td>Product Category:</td>
                <td>
                    {{ $product->p_category }}
                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>
                    {{ $product->p_price }}
                </td>
            </tr>
            <tr>
                <td>Product Quantity:</td>
                <td>
                    {{ $product->p_quantity }}
                </td>
            </tr>
            <tr>
                <td>Stock Date:</td>
                <td>
                    {{ $product->p_stockdate }}
                </td>
            </tr>
            <tr>
                <td>Product Rating:</td>
                <td>
                    {{ $product->p_rating }}
                </td>
            </tr>
            <tr>
                <td>Purchased:</td>
                <td>
                    {{ $product->p_purchased }}
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <a href="{{ route('productlist') }}"><button class="btn btn-outline-dark">Go Back</button></a>
                </td>
            </tr>
            </table>
    </div>
@endsection