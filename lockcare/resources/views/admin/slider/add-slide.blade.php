@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text text-primary text-center"><span class="fa fa-sliders"></span> Add Slide</h3>
                        <h4 class="text text-center text-success">{{Session::get('message')}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{ Form::open(['route'=>'new-slider','method'=>'POST','enctype'=>'multipart/form-data'])}}
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Slide Title </label>
                                <div class="col-md-9">
                                    <input type="text" name="slide_title" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Slide Short Description </label>
                                <div class="col-md-9">
                                    <textarea name="slide_short_description" id="" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Slide Long Description </label>
                                <div class="col-md-9">
                                    <textarea name="slide_long_description" id="editor" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Button1 URL#</label>
                                <div class="col-md-9">
                                    <input type="text" name="button1_url" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Button2 URL#</label>
                                <div class="col-md-9">
                                    <input type="text" name="button2_url" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3 control-label">Slide Image</label>
                                <div class="col-md-9">
                                    <input type="file" name="slide_image" required >
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
                                    <input type="submit" name="btn" value="Save Slider Info" class="btn btn-primary btn-outline btn-block">
                                </div>
                            </div>
                       {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
