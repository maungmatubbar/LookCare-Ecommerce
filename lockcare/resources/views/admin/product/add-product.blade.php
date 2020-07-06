@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <h3 class="text-center text-success">Add Product</h3>
                    <div class="alert alert-success">
                        <h4 class="text-center">{{Session::get('message')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'new-product','method'=>'POST','enctype'=>'multipart/form-data']) !!}
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
                                    <input type="text" name="product_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Price</label>
                                <div class="col-md-9">
                                    <input type="text" name="product_price" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Quantity</label>
                                <div class="col-md-9">
                                    <input type="number" name="product_quantity" min="1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Short Description</label>
                                <div class="col-md-9">
                                    <textarea name="product_short_description" class="form-control" id="" cols="30" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Long Description</label>
                                <div class="col-md-9">
                                    <textarea name="product_long_description" class="form-control" id="editor" cols="30" rows="12"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Product Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="product_image">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Publication Status</label>
                                <div class="col-md-9">
                                    <label for="publish">Published <input type="radio" id="publish" name="publication_status"  value="1" checked></label>
                                    <label for="unpublish"> Unpublished <input type="radio" id="unpublish" name="publication_status" value="0"></label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save Product Info">
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
