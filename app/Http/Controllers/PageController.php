<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\type_product;

class PageController extends Controller
{
    public function getIndex(){
        $loai = type_product::all()->toArray();
        return view('welcome')->with('type_Products',$loai);
    }
    public function getLoaiSP($type){
        $SP_theoloai = products::where('id_type',$type)->paginate(12);
        $sp_khac = products::where('id_type','<>',$type)->paginate(4);
        $loai = type_product::all();
        $loai_sp = type_product::where('id_type',$type)->first();
        return view('Page.type_product', compact('SP_theoloai','sp_khac','loai','loai_sp'))->with('type_Products',$loai);
    }
    public function getProduct(){
        $loai = type_product::all()->toArray();
        $new_products = products::orderBy('product_id', 'DESC')->paginate(4);
        return view('page.product', compact('new_products'))->with('type_Products',$loai);
    }
    public function getChiTietSP(Request $req){
        $loai = type_product::all()->toArray();
        $sanpham = products::where('product_id',$req->product_id)->first();
        $sp_tuongtu = products::where('id_type', $sanpham->id_type)->paginate(8);
        return view('Page.chitietsp',compact('sanpham','sp_tuongtu'))->with('type_Products',$loai);
    }
    public function getSearch(Request $req){
        $loai = type_product::all()->toArray();
        $product = products::where('name','like','%'.$req->key.'%')
                        ->orWhere('price',$req->key)
                        ->get();
        return view('page.search',compact('product'))->with('type_Products',$loai);
    }

}
