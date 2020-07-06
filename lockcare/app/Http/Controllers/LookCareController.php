<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

class LookCareController extends Controller
{
    public function index(){
        $products = Product::where('publication_status',1)
                    ->orderBy('id','ASC')
                    ->take(8)
                    ->get();
        $newProducts = Product::where('publication_status',1)
                        ->orderBy('id','DESC')
                        ->skip(2)
                        ->take(8)
                        ->get();
        $slides = Slide::where('publication_status',1)->get();
        return view ('front-end.home-page.home-page',[
            'newProducts'=>$newProducts,
            'products'=>$products,
            'slides'=>$slides
        ]);
    }
    public function categoryProduct($id){
        $categoryProducts = Product::where('category_id',$id)
                            ->where('publication_status',1)
                            ->get();
        return view('front-end.category-product.category-product',['categoryProducts'=>$categoryProducts]);
    }
    public function contactUs(){
        return view ('front-end.contact.contact-us');
    }
    public function productDetails($id,$categoryId){

        $product = Product::find($id);
        $relatedProducts = Product::where('category_id',$categoryId)
                                    ->orderBy('id','ASC')
                                    ->take(5)
                                    ->get();
       return view('front-end.product.product-details',['product'=>$product,'relatedProducts'=>$relatedProducts]);
    }
    public function brandProduct($id){
        $brandProducts = Product::where('brand_id',$id)
                        ->where('publication_status',1)
                        ->get();
        return view('front-end.brand-product.brand-product',['brandProducts'=>$brandProducts]);
    }

}
