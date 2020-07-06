@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="text-center">Customer Info for this order!</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Customer Name</th>
                                <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                            </tr>
                            <tr>
                                <th>Customer Email Address</th>
                                <td>{{$customer->email_address}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$customer->address}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$customer->phone_number}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-primary">Shipping Info for this order!</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Full Name</th>
                                    <td>{{$shipping->full_name}}</td>
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <td>{{$shipping->email_address}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$shipping->address}}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{$shipping->phone_number}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-primary">Order Info for this order!</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Order No</th>
                                    <td>{{$order->id}}</td>
                                </tr>
                                <tr>
                                    <th>Order Total</th>
                                    <td>{{$order->order_total}}</td>
                                </tr>
                                <tr>
                                    <th>Order Status</th>
                                    <td>{{$order->order_status}}</td>
                                </tr>
                                <tr>
                                    <th>Order Date</th>
                                    <td>{{$shipping->created_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-primary">Payment Info for this order!</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Payment Type</th>
                                    <td>{{$payment->payment_type}}</td>
                                </tr>
                                <tr>
                                    <th>Payment Status</th>
                                    <td>{{$payment->payment_status}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center text-primary">Product Info for this order!</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead class="bg-danger">
                                <th>SL No</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($orderDetails as $orderDetail)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$orderDetail->product_id}}</td>
                                        <td>{{$orderDetail->product_name}}</td>
                                        <td>{{$orderDetail->product_price}}</td>
                                        <td>{{$orderDetail->product_quantity}}</td>
                                        <td>TK. {{$orderDetail->product_price*$orderDetail->product_quantity+50}}</td>

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
