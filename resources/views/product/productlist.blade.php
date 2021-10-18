@extends('layouts.product')
<style>
    #list{
        background-color: blue
    }
</style>
@section('title')
    Product List
@endsection

@section('content')
    <table class="table table-responsive">
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Product Description</th>
        <th>Product Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Stock Date</th>
        <th>Rating</th>
        <th>Purchased</th>
        <th></th>
        <th></th>
        <th></th>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->p_name }}</td>
            <td>{{ $product->p_code }}</td>
            <td>{{ $product->p_desc }}</td>
            <td>{{ $product->p_category }}</td>
            <td>{{ $product->p_price }}</td>
            <td>{{ $product->p_quantity }}</td>
            <td>{{ $product->p_stockdate }}</td>
            <td>{{ $product->p_rating }}</td>
            <td>{{ $product->p_purchased }}</td>
            <td><a href="{{ route('details',$product->id) }}"><button class="btn btn-outline-info">Details</button></a></td>
            <td><a href="{{ route('edit',$product->id) }}"><button class="btn btn-outline-success">Edit</button></a></td>
            <td><a href="{{ route('delete',$product->id) }}"><button class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
        @endforeach
    </table>
@endsection