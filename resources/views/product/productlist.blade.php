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
        <tr>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td>yo</td>
            <td><a href="{{ route('details',1) }}"><button class="btn btn-outline-info">Details</button></a></td>
            <td><a href="{{ route('edit',1) }}"><button class="btn btn-outline-success">Edit</button></a></td>
            <td><button class="btn btn-outline-danger">Delete</button></td>
        </tr>
    </table>
@endsection