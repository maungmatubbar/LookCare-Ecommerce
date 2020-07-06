@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3 class="text-center text-success"><span class="fa fa-bank"></span> Edit Brand</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'update-brand','method'=>'POST']) !!}
                        <div class="form-group col-md-12">
                            <label class="col-md-3" for="brand_name" class="control-label">Brand Name</label>
                            <div class="col-md-9">
                                <input type="text" id="brand_name" name="brand_name" value="{{$brand->brand_name}}" class="form-control" required>
                                <input type="hidden"  name="id" value="{{$brand->id}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-3" for="brand_description" class="control-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea id="brand_description" name="brand_description" class="form-control" id="" cols="30" rows="10">{{$brand->brand_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-3" for="" class="control-label">Publication Status</label>
                            <div class="col-md-9">
                                <label for="publish">Published <input type="radio" id="publish" name="publication_status"  value="1" {{$brand->publication_status==1?'checked':''}}></label>
                                <label for="unpublish"> Unpublished <input type="radio" id="unpublish" name="publication_status" value="0"{{$brand->publication_status==0?'checked':''}}></label>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" name="btn" class="btn btn-primary" value="Update brand info">
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
