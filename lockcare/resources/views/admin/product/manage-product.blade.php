@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3 class="text-center text-warning">Manage Product</h3>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                      <div class="panel-body">
                          <table class="table table-bordered table-hover">
                              <thead class="bg-primary">
                                    <th>SL No</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product QTY</th>
                                    <th>Product Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                              </thead>
                              <tbody>
                              @php($i =1 )
                              @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->brand_name}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}</td>
                                        <td>{{$product->product_quantity}}</td>
                                        <td><img src="{{asset($product->product_image)}}" alt="" width="100" height="100"></td>
                                        <td>{{$product->publication_status==1?'Published':'Unpublished'}}</td>
                                        <td>
                                            @if($product->publication_status==1)
                                            <a href="{{route('unpublish-product',[$product->id])}}" class="btn btn-xs btn-info" title="Unpublish"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                            @else
                                            <a href="{{route('publish-product',[$product->id])}}" class="btn btn-xs btn-warning" title="Publish"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                            @endif
                                            <a href="{{route('view-product',[$product->id])}}" class="btn btn-xs btn-success" title="View Product"><span class="glyphicon glyphicon-zoom-in"></span></a>
                                            <a href="{{route('edit-product',[$product->id])}}" class="btn btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                            <a href="{{route('delete-product',[$product->id])}}" onclick="return confirm('Are you sure delete this!')" class="btn btn-xs btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                    </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
