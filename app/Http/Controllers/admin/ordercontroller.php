<?php

namespace App\Http\Controllers\admin;

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


    public function choxuly()
    {
        $db = orders::where('id_stt', 1)->paginate(15);
        return view('admin.orders.order', ['db' => $db]);
    }
    public function danggiaohang()
    {
        $db = orders::where('id_stt', 2)->paginate(15);
        return view('admin.orders.order', ['db' => $db]);
    }
    public function dagiao()
    {
        $db = orders::where('id_stt', 3)->paginate(15);
        return view('admin.orders.order', ['db' => $db]);
    }
    public function dahuy()
    {
        $db = orders::where('id_stt', 4)->paginate(15);
        return view('admin.orders.order', ['db' => $db]);
    }
}
