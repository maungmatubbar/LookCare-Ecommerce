@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <h3 class="text-center text-success">Edit Product</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'update-product','method'=>'POST','name'=>'edit_product_form','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Category Name</label>
                                <div class="col-md-9">
                                    <select name="category_id" id="" class="form-control" >
                                        <option>--Select Category Name--</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Brand Name</label>
                                <div class="col-md-9">
                                    <select name="brand_id" id="" class="form-control" >
                                        <option>--Select Brand Name--</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
                                    <input type="hidden" name="id" value="{{$product->id}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" name="product_price" value="{{$product->product_price}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" name="product_quantity" value="{{$product->product_quantity}}" min="1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Short Description</label>
                                <div class="col-md-9">
                                    <textarea name="product_short_description" class="form-control" id="" cols="30" rows="8">{{$product->product_short_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Long Description</label>
                                <div class="col-md-9">
                                    <textarea name="product_long_description" class="form-control" id="editor" cols="30" rows="12">{{$product->product_long_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Image</label>
                                <div class="col-md-9">
                                    <div>
                                        <img src="{{asset($product->product_image)}}" height="200" width="180" alt="">
                                    </div>
                                    <input type="file" name="product_image">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Publication Status</label>
                                <div class="col-md-9">
                                    <label for="publish">Published <input type="radio" id="publish" name="publication_status"  value="1" {{$product->publication_status==1?'checked':''}}></label>
                                    <label for="unpublish"> Unpublished <input type="radio" id="unpublish" name="publication_status" value="0" {{$product->publication_status==0?'checked':''}}></label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Publication Status</label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Update Product Info">
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['edit_product_form'].elements['category_id'].value='{{$product->category_id}}';
        document.forms['edit_product_form'].elements['brand_id'].value = '{{$product->brand_id}}';
    </script>
@endsection
