<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorPageContoller extends Controller
{
    public function error404(){
        return view('front-end.error-pages.error-404');
    }
    public function error405(){
        return view('front-end.error-pages.error-405');
    }
}
