<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\type_product;

class PageController extends Controller
{
    public function getIndex(){
        $types = type_product::all()->toArray();
        return view('welcome')->with('type_Products',$types);
    }
    public function getTypeproduct($type){
        $products_by_type = products::where('id_type',$type)->paginate(12);
        $other_products = products::where('id_type','<>',$type)->paginate(4);
        $types = type_product::all();
        $type_product = type_product::where('id_type',$type)->first();
        return view('Page.type_product', compact('products_by_type','other_products','types','type_product'))->with('type_Products',$types);
    }
    public function getProduct(){
        $types = type_product::all()->toArray();
        $new_products = products::orderBy('product_id', 'DESC')->paginate(4);
        return view('page.product', compact('new_products'))->with('type_Products',$types);
    }
    public function GetProductdetails(Request $req){
        $types = type_product::all()->toArray();
        $product = products::where('product_id',$req->product_id)->first();
        $similar_product = products::where('id_type', $product->id_type)->paginate(8);
        return view('Page.product_details',compact('product','similar_product'))->with('type_Products',$types);
    }
    public function getSearch(Request $req){
        $types = type_product::all()->toArray();
        $product = products::where('name','like','%'.$req->key.'%')
                        ->orWhere('price',$req->key)
                        ->get();
        return view('page.search',compact('product'))->with('type_Products',$types);
    }

}
