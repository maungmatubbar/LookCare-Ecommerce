@extends('front-end.master')
@section('title')
    Payment | LookCare
@endsection
@section('bodyContent')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <h4 class="text-center text-success">Dear {{Session::get('customerName')}}.Please enter your payment Method.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 well">
                <div class="">
                        {{Form::open(['route'=>'new-order','method'=>'post'])}}
                            <table class="table table-bordered">
                                <tr>
                                    <th>Cash On Delivery</th>
                                    <td><input type="radio" name="payment_type" value="Cash" checked> Cash</td>
                                </tr>
                                <tr>
                                    <th>Paypal</th>
                                    <td>
                                        <input type="radio" name="payment_type" value="Paypal"> Paypal
                                    </td>
                                </tr>
                                <tr>
                                    <th>Bkash</th>
                                    <td>
                                        <input type="radio" name="payment_type" value="Bkash"> Bkash
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <input type="submit" name="btn" value="Confirm Order" class="btn btn-success">
                                    </td>
                                </tr>

                            </table>
                        {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
@endsection
