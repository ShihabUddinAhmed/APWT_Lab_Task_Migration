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
                    Hawai Shirt Red
                </td>
            </tr>
            <tr>
                <td>Product Code:</td>
                <td>
                    SHRT203
                </td>
            </tr>
            <tr>
                <td>Product Description:</td>
                <td>
                    Hawai Shirt
                </td>
            </tr>
            <tr>
                <td>Product Category:</td>
                <td>
                    Shirt
                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>
                    250
                </td>
            </tr>
            <tr>
                <td>Product Quantity:</td>
                <td>
                    15
                </td>
            </tr>
            <tr>
                <td>Stock Date:</td>
                <td>
                    23-02-2020
                </td>
            </tr>
            <tr>
                <td>Product Rating:</td>
                <td>
                    5
                </td>
            </tr>
            <tr>
                <td>Purchased:</td>
                <td>
                    5
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