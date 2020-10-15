<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\products;
use App\type_product;
class AdminController extends Controller
{
    public function getIndex(){
        $loai = type_product::all()->toArray();
        return view('admin.product.list')->with('type_Products',$loai);
    }
   //    product controller
   public function getproductsList (){
    return view("admin.product.list");
}
public function getproductsAdd(){
    return view("admin.product.add");
}
public function getproductsEdit(){
    return view("admin.product.edit");
}
//   /product controller

//    Type_controller
public function gettypeList (){
    return view("admin.type_product.list");
}
public function gettypeAdd(){
    return view("admin.type_product.add");
}
public function gettypeEdit(){
    return view("admin.type_product.edit");
}
//   /Type_controller

//    user controller
    public function getuserList (){
    return view("admin.user.list");
    }
    public function getuserAdd(){
    return view("admin.user.add");
    }
    public function getuserEdit(){
    return view("admin.user.edit");
    }
//   /user controller

//    order controller



}
