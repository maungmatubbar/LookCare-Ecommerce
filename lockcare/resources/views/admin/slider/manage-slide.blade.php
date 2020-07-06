@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <h3 class="text-center text-warning"><span class="fa fa-sliders"></span> Manage Slider</h3>
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
                            <th>Slide Title</th>
                            <th>Slide Short Description</th>
                            <th>Slide Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @php($i =1 )
                            @foreach($slides as $slide)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$slide->slide_title}}</td>
                                    <td>{{$slide->slide_short_description}}</td>
                                    <td><img src="{{asset($slide->slide_image)}}" height="100" width="200" alt=""></td>
                                    <td>{{$slide->publication_status==1?'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($slide->publication_status==1)
                                            <a href="{{route('slider-unpublish',['id'=>$slide->id])}}" class="btn btn-xs btn-info" title="Unpublish"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                        @else
                                            <a href="{{route('slider-publish',['id'=>$slide->id])}}" class="btn btn-xs btn-warning" title="Publish"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                        @endif
                                        <a href="{{route('slider-edit',['id'=>$slide->id])}}" class="btn btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a href="{{route('slider-delete',['id'=>$slide->id])}}" onclick="return confirm('Are you sure delete this!')" class="btn btn-xs btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
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
