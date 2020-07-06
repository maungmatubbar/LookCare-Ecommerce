@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center text-primary">Order Edit Status</h3>
                    </div>
                    <div class="panel-body">
                        {{Form::open(['route'=>'order-status-update','method'=>'POST','name'=>'orderForm'])}}
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3">Order status</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="id" value="{{$order->id}}">
                                    <select name="order_status" id="order_status" class="form-control">
                                        <option value="{{$order->order_status}}">{{$order->order_status}}</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="" class="col-md-3">Payment status</label>
                                <div class="col-md-9">
                                    <select name="payment_status" id="payment_status" class="form-control">
                                        <option value="{{$payment->payment_status}}">{{$payment->payment_status}}</option>
                                        <option value="Complete">Complete</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn"  value="Update Status" id="btn" class="btn btn-success">
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            var orderStatus = document.getElementById('order_status').value;
            var paymentStatus = document.getElementById('payment_status').value;
            if(orderStatus=='Complete' && paymentStatus=='Complete'){
                document.getElementById('btn').disabled=true;
            }
    </script>
@endsection
