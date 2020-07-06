@extends('admin.master')
@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h1 class="text-center text-success"><span class="glyphicon glyphicon-shopping-cart"></span> Manage Order</h1>
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
                                <th>Customer Name</th>
                                <th>Order Total</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th>Payment Type</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->first_name.' '.$order->last_name}}</td>
                                    <td>{{$order->order_total}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>

                                        <a href="{{route('view-order-detail',['order_id'=>$order->id])}}" class="btn btn-xs btn-info" title="View order"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                        <a href="{{route('view-invoice',['order_id'=>$order->id])}}" class="btn btn-xs btn-success" title="View Order invoice"><i class="fa fa-file-photo-o"></i></a>
                                        <a href="{{route('download-order-invoice',['order_id'=>$order->id])}}" class="btn btn-xs btn-warning" title="Download Invoice"><i class="fa fa-arrow-down"></i></a>
                                        <a href="{{route('edit-order',['order_id'=>$order->id])}}" class="btn btn-xs btn-primary" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="" class="btn btn-xs btn-danger" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>

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

