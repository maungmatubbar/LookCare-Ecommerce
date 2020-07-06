@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="panel panel-success">
                    <h3 class="text-success text-center"><span class="glyphicon glyphicon-certificate"></span>Add Category</h3>
                </div>
            </div>
        </div>
    </div>
   <div class="container-fluid">
       <div class="col-md-12">
           <div class="row">
               <div class="panel panel-default">
                   <div class="panel-body">
                       {!! Form::open(['route'=>'new-category','class'=>'form-horizontal','method'=>'POST']) !!}
                           <div class="form-group col-md-12">
                               <label class="col-md-3" for="">Category Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="category_name" class="form-control" required>
                               </div>
                           </div>
                           <div class="form-group col-md-12">
                               <label class="col-md-3" for="">Category Desciption</label>
                               <div class="col-md-9">
                                   <textarea class="form-control" name="category_description" id="" cols="30" rows="8"></textarea>
                               </div>
                           </div>
                           <div class="form-group col-md-12">
                               <label class="col-md-3" for="">Publication Status</label>
                               <div class="col-md-9">
                                   <span>
                                        <label for="publish">Published</label> <input type="radio" value="1" id="publish" name="publication_status" >
                                   </span>
                                  <span>
                                       <label for="unpulish">Unpublished </label> <input type="radio" value="0" id="unpublish" name="publication_status" checked>
                                  </span>

                               </div>
                           </div>
                           <div class="form-group col-md-12">
                               <div class="col-md-9 col-md-offset-3">
                                   <input type="submit" name="btn" class="btn btn-sm btn-primary" value="Save category info">
                               </div>
                           </div>
                       {!! Form::close() !!}
                       <h4 class="col-md-9 col-md-offset-3 text-success">{{Session::get('message')}}</h4>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
