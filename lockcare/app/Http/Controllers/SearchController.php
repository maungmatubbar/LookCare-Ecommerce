<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchResult(Request $request){
        $query = $request->input('query');
        $products = Product::where('product_name','like',"%$query%")->get();
            return view('front-end.search.search-results')->with('products',$products);

    }
}
