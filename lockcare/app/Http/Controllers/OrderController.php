<?php

namespace App\Http\Controllers;

use App\Customer;
use App\OrderDetails;
use App\Payment;
use App\Product;
use App\Shipping;
use Illuminate\Http\Request;
use DB;
use App\Order;
use PDF;
class OrderController extends Controller
{
    public function manageOrderInfo(){
        $orders = DB::table('orders')
                ->join('customers','orders.customer_id','=','customers.id')
                ->join('payments','orders.id','=','payments.order_id')
                ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')
                ->get();
        return view('admin.order.manage-order',['orders'=>$orders]);
    }
    public function viewOrderDetail($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderDetails = OrderDetails::where('order_id',$order->id)->get();
       /* foreach($orderDetails as $orderDetail){
            $products = Product::where('id',$orderDetail->product_id)->get();
        }*/
        return view('admin.order.view-order',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
           'orderDetails'=>$orderDetails
           /* 'product'=>$products*/
        ]);
    }
    public function viewInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderDetails = OrderDetails::where('order_id',$order->id)->get();
       return view('admin.order.view-invoice',[
           'order'=>$order,
           'customer'=>$customer,
           'shipping'=>$shipping,
           'payment'=>$payment,
           'orderDetails'=>$orderDetails
       ]);
    }
    public function downloadOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id)->first();
        $orderDetails = OrderDetails::where('order_id',$order->id)->get();
        $pdf = PDF::loadView('admin.order.download-invoice',[
            'order'=>$order,
            'customer'=>$customer,
            'shipping'=>$shipping,
            'payment'=>$payment,
            'orderDetails'=>$orderDetails
        ]);
        return $pdf->stream('invoice.pdf');
    }
    public function orderEdit($id){
        $order = Order::find($id);
        $payment = Payment::where('order_id',$order->id)->first();
        return view('admin.order.edit-order',[
            'order'=>$order,
            'payment'=>$payment
            ]);
    }
    public function updateOrderInfo(Request $request){
        $order = Order::find($request->id);
        $order->order_status = $request->order_status;
        $order->save();
        $payment = Payment::where('order_id',$order->id)->first();
        $payment->payment_status = $request->payment_status;
        $payment->save();
        return redirect('/order/manage-order')->with('message','Update Order Info Successfully.');
    }
}
