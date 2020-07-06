@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h3 class="text-center text-info">Manage Category</h3>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                            <th>SL No</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>{{$category->publication_status == 1?'Published':'Unpublished'}}</td>
                            <td>
                                @if($category->publication_status == 1)
                                    <a href="{{route('unpublish-category',[$category->id])}}" class="btn btn-xs btn-info" title="Unpublish"><span class="glyphicon glyphicon-arrow-down"></span></a>
                                @else
                                    <a href="{{route('publish-category',[$category->id])}}" class="btn btn-xs btn-warning" title="Publish"><span class="glyphicon glyphicon-arrow-up"></span></a>
                                @endif
                                <a href="{{route('edit-category',[$category->id])}}" class="btn btn-xs btn-primary" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{route('delete-category',[$category->id])}}" onclick="return confirm('Are you sure delete this!')" class="btn btn-xs btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
