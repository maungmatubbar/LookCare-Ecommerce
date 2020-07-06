@extends('admin.master')
@section('main-content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="panel panel-default">
                   <h3 class="text-center text-primary">Manage Brand</h3>
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
                                <tr>
                                    <th>Sl No</th>
                                    <th>Brand Name</th>
                                    <th>Brand Description</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                          </thead>
                          <tbody>
                            @php($i=1)
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_description}}</td>
                                    <td>{{$brand->publication_status ==1?'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($brand->publication_status ==1)
                                            <a href="{{route('unpublish-brand',[$brand->id])}}" class="btn btn-xs btn-info" title="Unpublish"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                        @else
                                            <a href="{{route('publish-brand',[$brand->id])}}" class="btn btn-xs btn-warning" title="Publish"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                        @endif
                                        <a href="{{route('edit-brand',[$brand->id])}}" class="btn btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{route('delete-brand',[$brand->id])}}" class="btn btn-xs btn-danger" title="Delete" onclick="return confirm('Are you sure delete this!')"><span class="glyphicon glyphicon-trash"></span></a>
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
