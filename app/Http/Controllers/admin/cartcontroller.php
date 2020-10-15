<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\orders;
use App\orders_items;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\products;
use Carbon\Carbon;

class cartcontroller extends Controller
{

        public function AddProduct($id)
        {
            $product = products::where('product_id',$id)->get();
            foreach($product as $products){


            if (!$products) {
                return redirect('/');
            } else {
                Cart::add([
                    'id'       => $id,
                    'name'     => $products->name,
                    'qty' => 1,
                    'price'    => $products->price,
                    'weight' => $products->weight,
                    'options' => ['avatar' => $products->image]
                ]);
                return redirect()->back();

            }
        }
    }

    public function ListCart()
    {
        $product = Cart::content();
        return view('page.cart', ['cart' => $product]);
    }

    public function deletecart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
    public function updatequantity(Request $request){
        $rowId = $request->rowId;
        $weight = $request->weight;

        Cart::update($rowId, ['qty' => $weight]);
        return redirect()->back();

    }
    public function checkout()
    {

        $product = Cart::content();

        return view('page.checkout', ['cart' => $product]);
    }

    public function Postcheckout(Request $request)
    {
        $total_price = str_replace(',', '', Cart::subtotal(0, 3));
        $orders_id = orders::insertGetId([
            'id_stt' => 1,
            'order_date' => Carbon::now(),
            'order_name' => $request->order_name,
            'order_sdt' => $request->order_sdt,
            'total_price' => (int) $total_price,
            'address' => $request->address,
            'note' => $request->note,

        ]);

        if ($orders_id) {
            $product = Cart::content();
            foreach ($product as $sp) {
                orders_items::insert([

                    'order_id' => $orders_id,
                    'product_id' => $sp->id,
                    'quantity' => $sp->qty,
                    'total' => $sp->price
                ]);

                //..
                $dbSP = products::where('product_id', $sp->id)->get();
                foreach ($dbSP as $sxp) {
                    $name = $sxp->name;
                    $image = $sxp->image;
                    $price = $sxp->price;
                    $weight = $sxp->weight;
                }
                products::where('product_id', $sp->id)->update([
                    'name' => $name,
                    'image' => $image,
                    'price' => $price,
                    'weight' => $weight - $sp->qty,

                ]);
            }
        }





        Cart::destroy();
        return view('page.checkoutyes', ['order_id' => $orders_id]);
    }
    public function xacnhantinhtrang(Request $request)
    {
        $id = $request->order_id;
        $id_tinh_trangyes = $request->id_stt;

        $db = orders::where('order_id', $id)->get();

        orders::where('order_id',$id)->update([

            'id_stt' => $id_tinh_trangyes,

        ]);

        return redirect()->back();
    }


}
