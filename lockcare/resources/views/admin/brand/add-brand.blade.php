@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3 class="text-center text-success"><span class="fa fa-bank"></span> Add Brand</h3>
                    <h4 class="text-center text-info">{{Session::get('message')}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::open(['route'=>'new-brand','method'=>'POST']) !!}
                            <div class="form-group col-md-12">
                                <label class="col-md-3" for="brand_name" class="control-label">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="brand_name" name="brand_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="col-md-3" for="brand_description" class="control-label">Brand Description</label>
                                <div class="col-md-9">
                                    <textarea id="brand_description" name="brand_description" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="col-md-3" for="" class="control-label">Publication Status</label>
                                <div class="col-md-9">
                                    <label for="publish">Published <input type="radio" id="publish" name="publication_status"  value="1" checked></label>
                                    <label for="unpublish"> Unpublished <input type="radio" id="unpublish" name="publication_status" value="0"></label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-primary" value="Save brand info">
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
