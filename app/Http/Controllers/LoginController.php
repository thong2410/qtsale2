<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\type_product;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;
Session_start();


class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
        // $this->middleware('guest:admin');
        // $this->middleware('guest:manager');
    } // nếu đã đăng nhập thì không vào được trang này

    public function GetLogin (){
        $loai = type_product::all()->toArray();
        return view("page.login")->with('type_Products',$loai);
    }

    public function PostLogin (Request $request){

        $arr = [
            'customer_email'=>$request->customer_email,
            'password'=>$request->password
        ];
        if (Auth::attempt($arr)) {
             return redirect('/');
        }
        else {
            return redirect()->back()->with('errLogin', 'Email hoặc mật khẩu sai!');
        }



    }

    public function GetSigup (){
        $loai = type_product::all()->toArray();
        return view("page.sigup")->with('type_Products',$loai);;
    }
    public function PostSigup (Request $request){
        $data = array();
    $data['customer_name'] = $request->customer_name ;
    $data['customer_email'] = $request->customer_email;
    $data['customer_phone'] = $request->customer_phone;
    $data['password'] = Hash::make($request->password);

    $customer_id = DB::table('customer')->insertGetId($data);

    $arr = [
        'customer_email'=>$request->customer_email,
        'password'=>$request->password
    ];

    if (Auth::attempt($arr)) {
        return redirect("/");
    }
    else {
        return redirect()->back()->with('errLogin', 'Đăng kí không thành công');
    }
    }


}
