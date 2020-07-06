@extends('front-end.master')
@section('bodyContent')
    <main class="main-container">
        <!-- shopping cart content -->
        <section class="shopping-cart-area">
            <!-- Begin cart -->
            <div class="ld-subpage-content">

                <div class="ld-cart">

                    <!-- Begin cart section -->
                    <section class="ld-cart-section ptb-50">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-12">

                                    <!-- Begin table -->
                                    <table class="table cart-table">
                                        <thead>
                                        <tr>
                                            <th class="table-title">SL</th>
                                            <th class="table-title">Product Name</th>
                                            <th class="table-title">Unit Price</th>
                                            <th class="table-title">Quantity</th>
                                            <th class="table-title">SubTotal</th>
                                            <th>

                                                <span class="close-button disabled"></span></th>
                                        </tr>
                                        </thead>


                                        <tbody>

                                        @php($i=1)
                                        @php($sum = 0)
                                        <!-- End tr -->
                                        @foreach($cartItems as $cartItem)
                                        <tr>
                                            <td class="product-name">{{$i++}}</td>
                                            <td class="product-name-col">
                                                <figure>
                                                    <a href="#"><img class="img-responsive" src="{{asset($cartItem->options->image)}}" height="100" width="80" alt="Mustard yellow ruffle dress"></a>
                                                </figure>
                                                <h2 class="product-name">{{$cartItem->name}}</h2>
                                            </td>
                                            <td class="product-price-col">
                                                <span class="product-price-special">TK.{{$cartItem->price}}</span>
                                            </td>
                                            <td>
                                                <div class="custom-quantity-input">
                                                    {{Form::open(['route'=>'update_qty','method'=>'POST'])}}
                                                    <div class="form-group">
                                                        <input type="text" name="quantity" value="{{$cartItem->qty}}">
                                                        <input type="hidden" name="rowId" class="form-group" value="{{$cartItem->rowId}}">
                                                        <input type="submit" name="btn" value="Update" class="form-group btn btn-xs btn-success">
                                                    </div>
                                                    {{Form::close()}}
                                                </div>
                                            </td>
                                            <td class="product-total-col">
                                                <span class="product-price-special">TK.{{$subtotal=$cartItem->subtotal}}</span>
                                            </td>
                                            <td>
                                                <a href="{{route('delete-cart-item',['rowId'=>$cartItem->rowId])}}" class="close-button"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                            <?php $sum+=$subtotal;?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!-- End table -->

                                    <div class="mt-30"></div>

                                    <div class="row">

                                        <div class="col-md-12">




                                            <table class="table total-table">

                                                <tbody>
                                                <tr>
                                                    <td class="total-table-title">Subtotal:</td>
                                                    <td>{{$sum}}.TK</td>
                                                </tr>
                                                <tr>
                                                    <td class="total-table-title">Shipping(50.TK):</td>
                                                    <td>{{$sum+=50}}.TK</td>
                                                </tr>
                                                </tbody>

                                                <tfoot>
                                                <tr>
                                                    <td>Total:</td>
                                                    <td>{{$sum}}.TK</td>
                                                </tr>
                                                <?php $orderTotal = $sum; Session::put('orderTotal',$orderTotal)?>
                                                </tfoot>
                                            </table>
                                            <!-- End table -->

                                            <div class="mt-30"></div>
                                            <a href="{{route('/')}}" class="btn btn-custom-6 btn-lger min-width-lg">Continue Shopping</a>
                                            @if(Session::get('customerId') && Session::get('shippingId'))
                                                <a href="{{route('checkout-payment')}}" class="btn btn-custom-6 btn-lger min-width-sm pull-right">Checkout</a>
                                            @elseif(Session::get('customerId') )
                                                <a href="{{route('checkout-shipping')}}" class="btn btn-custom-6 btn-lger min-width-sm pull-right">Checkout</a>
                                            @else
                                                <a href="{{route('checkout')}}" class="btn btn-custom-6 btn-lger min-width-sm pull-right">Checkout</a>
                                            @endif
                                        </div>

                                        <div class="mt-30 visible-sm visible-xs clearfix"></div>

                                        <!-- /.col-md-4 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                        </div>

                    </section>
                    <!-- /.ld-cart-section -->

                </div>
                <!-- /.ld-cart -->
            </div>
            <!-- /.ld-subpage-content -->
            <!-- End Cart -->
        </section>
        <!-- end shopping cart content -->

    </main>
@endsection
