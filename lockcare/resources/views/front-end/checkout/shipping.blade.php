@extends('front-end.master')
@section('title')
    Shipping | Lockcare
@endsection
@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                   <h4 class="text-center text-success">Dear {{Session::get('customerName')}}.You have to give us shipping info to complete your valuable order.If your billing info & shipping info are same then just press save button.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 well">
                <div class="">
                 <h3 class="text-center">Shipping Information Goes Here</h3>
                    {{Form::open(['route'=>'new-shipping','method'=>'POST'])}}
                        <div class="form-group col-md-12">
                            <label class="col-md-4" for="">Customer Name</label>
                            <div class="col-md-8">
                                <input type="text" name="full_name" value="{{$customer->first_name.' '.$customer->last_name}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4" for="">Email Address</label>
                            <div class="col-md-8">
                                <input type="email" name="email_address" value="{{$customer->email_address}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4" for="">Phone Number</label>
                            <div class="col-md-8">
                                <input type="text" name="phone_number" value="{{$customer->phone_number}}" class="form-control">
                            </div>
                            </div>
                        <div class="form-group col-md-12">
                            <label class="col-md-4" for="">Prasent Address</label>
                            <div class="col-md-8">
                                <textarea name="address" class="form-control" id="" cols="30" rows="10">{{$customer->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <div class="col-md-8 col-md-offset-4">
                                <input type="submit" name="btn" value="Save Shipping Info" class="btn btn-success">
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

@endsection
