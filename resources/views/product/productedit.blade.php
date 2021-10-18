@extends('layouts.productform')

@section('title')
    Edit Product
@endsection

@section('form')
    <div>
        <form action="{{ route('edit',$product->id) }}" class="form form-control" method="post">
            {{ csrf_field() }}
            <table class="table table-responsive">
                <tr>
                    <td>Product Name:</td>
                    <td>
                        <input type="text" id="name" name="name" placeholder="Product Name" value="{{ $product->p_name }}" class="form-control">
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
                        <input type="text" id="code" name="code" placeholder="Product Code" value="{{ $product->p_code }}" class="form-control">
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
                        <input type="text" id="desc" name="desc" placeholder="Product Description" value="{{ $product->p_desc }}" class="form-control">
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
                        <input type="text" id="category" name="category" placeholder="Product Category" value="{{ $product->p_category }}" class="form-control">
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
                        <input type="text" id="price" name="price" placeholder="Price" value="{{ $product->p_price }}" class="form-control">
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
                        <input type="text" id="quantity" name="quantity" placeholder="Product Quantity" value="{{ $product->p_quantity }}" class="form-control">
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
                        <input type="date" id="stockdate" name="stockdate" value="{{ $product->p_stockdate }}" class="form-control">
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
                        @if ($product->p_rating==1)
                        <input type="radio" id="rating" name="rating" value="1" checked>1
                        @else
                            <input type="radio" id="rating" name="rating" value="1">1
                        @endif
                        @if ($product->p_rating==2)
                        <input type="radio" id="rating" name="rating" value="2" checked>2
                        @else
                            <input type="radio" id="rating" name="rating" value="2">2
                        @endif
                        @if ($product->p_rating==3)
                        <input type="radio" id="rating" name="rating" value="3" checked>3
                        @else
                            <input type="radio" id="rating" name="rating" value="3">3
                        @endif
                        @if ($product->p_rating==4)
                        <input type="radio" id="rating" name="rating" value="4" checked>4
                        @else
                            <input type="radio" id="rating" name="rating" value="4">4
                        @endif
                        @if ($product->p_rating==5)
                        <input type="radio" id="rating" name="rating" value="5" checked>5
                        @else
                            <input type="radio" id="rating" name="rating" value="5">5
                        @endif
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
                        <input type="text" id="purchased" name="purchased" placeholder="Purchased" value="{{ $product->p_purchased }}" class="form-control">
                    </td>
                    <td>
                        @error('purchased')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" class="btn btn-success" value="Save">
                    </td>
                </tr>
            </table>
        </form>
        <a href="{{ route('productlist') }}"><button class="btn btn-outline-dark">Back</button></a>
    </div>
@endsection