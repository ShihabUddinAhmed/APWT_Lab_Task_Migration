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
        <form action="{{ route('create') }}" class="form form-control" method="post">
            {{csrf_field()}}
            <table class="table table-responsive">
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Product Name">
                        
                    </td>
                    <td>
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Product Code:</td>
                    <td>
                        <input type="text" id="code" name="code" placeholder="Product Code">
                    </td>
                    <td>
                        @error('code')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Product Description:</td>
                    <td>
                        <input type="text" id="desc" name="desc" placeholder="Product Description">
                    </td>
                    <td>
                        @error('desc')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Product Category:</td>
                    <td>
                        <input type="text" id="category" name="category" placeholder="Product Category">
                    </td>
                    <td>
                        @error('category')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="text" id="price" name="price" placeholder="Price">
                    </td>
                    <td>
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Product Quantity:</td>
                    <td>
                        <input type="text" id="quantity" name="quantity" placeholder="Product Quantity">
                    </td>
                    <td>
                        @error('quantity')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Stock Date:</td>
                    <td>
                        <input type="date" id="stockdate" name="stockdate">
                    </td>
                    <td>
                        @error('stockdate')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
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
                    <td>
                        @error('rating')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Purchased:</td>
                    <td>
                        <input type="text" id="purchased" name="purchased" placeholder="Purchased">
                    </td>
                    <td>
                        @error('purchased')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
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