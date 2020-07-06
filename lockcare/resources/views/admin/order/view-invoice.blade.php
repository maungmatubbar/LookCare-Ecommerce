@extends('admin.master')
@section('main-content')
    <!doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>A simple, clean, and responsive HTML invoice template</title>

                <style>
                    .invoice-box {
                        max-width: 800px;
                        margin: auto;
                        padding: 30px;
                        border: 1px solid #eee;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                        font-size: 16px;
                        line-height: 24px;
                        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                        color: #555;
                    }

                    .invoice-box table {
                        width: 100%;
                        line-height: inherit;
                        text-align: left;
                    }

                    .invoice-box table td {
                        padding: 5px;
                        vertical-align: top;
                    }

                    .invoice-box table tr td:nth-child(2) {
                        text-align: right;
                    }

                    .invoice-box table tr.top table td {
                        padding-bottom: 20px;
                    }

                    .invoice-box table tr.top table td.title {
                        font-size: 45px;
                        line-height: 45px;
                        color: #333;
                    }

                    .invoice-box table tr.information table td {
                        padding-bottom: 40px;
                    }

                    .invoice-box table tr.heading td {
                        background: #eee;
                        border-bottom: 1px solid #ddd;
                        font-weight: bold;
                    }

                    .invoice-box table tr.details td {
                        padding-bottom: 20px;
                    }

                    .invoice-box table tr.item td{
                        border-bottom: 1px solid #eee;
                    }

                    .invoice-box table tr.item.last td {
                        border-bottom: none;
                    }

                    .invoice-box table tr.total td:nth-child(2) {
                        border-top: 2px solid #eee;
                        font-weight: bold;
                    }

                    @media only screen and (max-width: 600px) {
                        .invoice-box table tr.top table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }

                        .invoice-box table tr.information table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
                    }

                    /** RTL **/
                    .rtl {
                        direction: rtl;
                        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                    }

                    .rtl table {
                        text-align: right;
                    }

                    .rtl table tr td:nth-child(2) {
                        text-align: left;
                    }
                </style>
            </head>

            <body>
                <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="top">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td class="title">
                                            <div class="bg-primary" style="border-radius: 10px">LookCare Invoice</div>
                                        </td>

                                        <td>
                                            Invoice #: 0000{{$order->id}}<br>
                                            Created: {{$order->created_at}}<br>
                                            Amount: {{$order->order_total}}.TK<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="information">
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td>
                                            <h3>Shipping Info</h3>
                                           {{$shipping->full_name}}<br>
                                            {{$shipping->email_address}}<br>
                                            {{$shipping->address}}<br>
                                            {{$shipping->phone_number}}<br>
                                        </td>

                                        <td>
                                            <h3>Billing Info</h3>
                                           {{$customer->first_name.' '.$customer->last_name}}<br>
                                           {{$customer->email_address}}<br>
                                           {{$customer->address}}<br>
                                           {{$customer->phone_number}}<br>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr class="heading">
                            <td>
                                Payment Method
                            </td>

                            <td>
                               #Option
                            </td>
                        </tr>

                        <tr class="details">
                            <td>
                                {{$payment->payment_type}}
                            </td>

                            <td>
                               {{$order->order_total}}.TK
                            </td>
                        </tr>
                    </table>
                    <table class="table table-bordered">
                        <tr>
                            <thead class="bg-black">
                                <th>Item</th>
                                <th>Rate</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                            </thead>
                        </tr>
                        @foreach($orderDetails as $orderDetail)
                        <tr>
                            <th>{{$orderDetail->product_name}}</th>
                            <th>{{$orderDetail->product_price}}</th>
                            <th>{{$orderDetail->product_quantity}}</th>
                            <th>{{$orderDetail->product_quantity*$orderDetail->product_price}}.TK</th>
                        </tr>
                        @endforeach
                    </table>
                    <table class="table table-striped">
                        <tr>
                            <th>Shipping Charge</th>
                            <td>50.TK</td>

                        </tr>
                        <tr>
                            <th>Total Amount</th>
                            <td>{{$orderDetail->product_quantity*$orderDetail->product_price+50}}.TK</td>
                        </tr>
                    </table>
                </div>
            </body>
        </html>

@endsection
