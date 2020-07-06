@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <h3 class="text-center">View Product</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                   <table class="table table-bordered">
                       <tr>
                           <th>Category Name</th>
                           <td>{{$category->category_name}}</td>
                       </tr>
                       <tr>
                           <th>Brand Name</th>
                           <td>{{$brand->brand_name}}</td>
                       </tr>
                       <tr>
                           <th>Product Name</th>
                           <td>{{$product->product_name}}</td>
                       </tr>
                       <tr>
                           <th>Product Price</th>
                           <td>{{$product->product_price}}</td>
                       </tr>
                       <tr>
                           <th>Product Quantity</th>
                           <td>{{$product->product_quantity}}</td>
                       </tr>
                       <tr>
                           <th>Product Short Description</th>
                           <td>{{$product->product_short_description}}</td>
                       </tr>
                       <tr>
                           <th>Product Long Description</th>
                           <td>{!! $product->product_long_description !!}</td>
                       </tr>
                       <tr>
                           <th>Product Image</th>
                           <td><img src="{{asset($product->product_image)}}" alt="" height="200" width="180"></td>
                       </tr>
                       <tr>
                           <th>Publication Status</th>
                           <td>{{$product->publication_status == 1?'Published':'Unpublished'}}</td>
                       </tr>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
