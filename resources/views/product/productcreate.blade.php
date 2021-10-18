@extends('layouts.productform')

<style>
    #create{
        background-color: blue
    }
</style>

@section('title')
    Add Product
@endsection

@section('form')
    <div>
        <form action="" class="form form-control">
            <table class="table table-responsive">
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Product Name">
                    </td>
                </tr>
                <tr>
                    <td>Product Code:</td>
                    <td>
                        <input type="text" id="code" name="code" placeholder="Product Code">
                    </td>
                </tr>
                <tr>
                    <td>Product Description:</td>
                    <td>
                        <input type="text" id="desc" name="desc" placeholder="Product Description">
                    </td>
                </tr>
                <tr>
                    <td>Product Category:</td>
                    <td>
                        <input type="text" id="category" name="category" placeholder="Product Category">
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="text" id="price" name="price" placeholder="Price">
                    </td>
                </tr>
                <tr>
                    <td>Product Quantity:</td>
                    <td>
                        <input type="text" id="quantity" name="quantity" placeholder="Product Quantity">
                    </td>
                </tr>
                <tr>
                    <td>Stock Date:</td>
                    <td>
                        <input type="date" id="stockdate" name="stockdate">
                    </td>
                </tr>
                <tr>
                    <td>Product Rating:</td>
                    <td>
                        <input type="radio" id="rating" name="rating" value="1">1
                        <input type="radio" id="rating" name="rating" value="2">2
                        <input type="radio" id="rating" name="rating" value="3">3
                        <input type="radio" id="rating" name="rating" value="4">4
                        <input type="radio" id="rating" name="rating" value="5">5
                    </td>
                </tr>
                <tr>
                    <td>Purchased:</td>
                    <td>
                        <input type="text" id="purchased" placeholder="Purchased">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Add Product">
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection