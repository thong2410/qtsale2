<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function product(){
        return view('page.product');
    }
    public function typeProduct(){
        return view('page.type_Product');
    }
}
