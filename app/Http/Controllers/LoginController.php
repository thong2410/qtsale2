<?php

namespace App\Http\Controllers;
use App\type_product;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin (){
        return view("page.login");
    }
    public function GetCheckout (){

        $loai = type_product::all()->toArray();
        return view("page.checkout")->with('type_Products',$loai);
    }
    public function GetCart (){
        $loai = type_product::all()->toArray();
        return view("page.cart")->with('type_Products',$loai);
    }
    public function GetSigup (){
        return view("page.sigup");
    }

}
