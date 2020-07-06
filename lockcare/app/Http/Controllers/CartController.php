<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function addToCart(Request $request){
        $product = Product::find($request->id);
        $cart = Cart::add([
            'id'=>$request->id,
            'name'=>$product->product_name,
            'qty'=>$request->product_quantity,
            'price'=>$product->product_price,
            'weight'=>0,
            'options'=>[
                'image'=>$product->product_image,
            ]
        ]);
        return redirect('/cart/show');
    }
    public function showCart(){
        $cartItems= Cart::content();
        return view('front-end.cart.show-cart',['cartItems'=>$cartItems]);
    }
    public function deleteCartItem($rowId){
            Cart::remove($rowId);
            return redirect('/cart/show');
    }
    public function updateCartItem(Request $request){
           Cart::update($request->rowId,['qty'=>$request->quantity]);
            return redirect('/cart/show');
    }

}
