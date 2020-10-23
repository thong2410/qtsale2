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


    // public function Processing()
    // {
    //     $db = orders::where('id_stt', 1)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function shipping()
    // {
    //     $db = orders::where('id_stt', 2)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function delivered()
    // {
    //     $db = orders::where('id_stt', 3)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    // public function cancel()
    // {
    //     $db = orders::where('id_stt', 4)->paginate(15);
    //     return view('admin.orders.order', ['db' => $db]);
    // }
    public function myorder()
    {
        $id = Auth::user()->id;

        $hoadon = orders::where([
            ['id_stt','<=', 3],
            ['id_users', $id],
            ])->latest('order_id')->get();

        $sohoadon = orders::where([
            ['id_stt','<=', 3],
            ['id_users', $id],
            ])->latest('order_id')->count();
        return view('page.orderuser', ['db' => $hoadon, 'sodon' => $sohoadon]);
    }
}
