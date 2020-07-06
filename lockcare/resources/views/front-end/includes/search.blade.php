{{Form::open(['route'=>'search-product','method'=>'GET'])}}
    <div class="form-group">
        <input type="text" name="query" class="form-control" value="{{request()->input('query')}}" placeholder="Search...">
        {{--<span class="input-group-btn">
           --}}{{-- <button class="btn btn-color" type="submit">Search</button>--}}{{--
        </span>--}}
    </div>
{{Form::close()}}
