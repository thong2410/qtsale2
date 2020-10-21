<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\orders;
use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function getorder()
    {
        $db = orders::paginate(15);

        return view('admin.orders.order', ['db' => $db]);
    }
    public function deleteorder($id)
    {

        orders::where('order_id', $id)->delete();
        return redirect()->back();
    }

    public function orderitems($id)
    {
        $db_ct = orders::where('order_id', $id)->get();

        return view('admin.orders.order_details', ['db' => $db_ct]);
    }


    // public function choxuly()
    // {
    //     $db = orders::where('id_stt', 1)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function danggiaohang()
    // {
    //     $db = orders::where('id_stt', 2)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function dagiao()
    // {
    //     $db = orders::where('id_stt', 3)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function dahuy()
    // {
    //     $db = orders::where('id_stt', 4)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    public function myorder()
    {
        $id = Auth::user()->customer_id;

        $order = orders::where([
            ['id_stt','<=', 3],
            ['customer_id', $id],
            ])->latest('order_id')->get();

        $orders = orders::where([
            ['id_stt','<=', 3],
            ['customer_id', $id],
            ])->latest('order_id')->count();
        return view('page.orderuser', ['db' => $order, 'sodon' => $orders]);
    }
}
