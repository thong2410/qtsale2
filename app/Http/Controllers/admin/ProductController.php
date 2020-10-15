<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\products;
use App\type_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    // danh sach
    public function getList()
    {
        $product = products::paginate(8);
        return view('admin.product.list', compact('product'));
    }
    // thêm sản phẩm
    public function getAdd()
    {
        $type = type_product::all();
        return view('admin.product.add',['type' => $type]);
    }
    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required'
        ],[
            'name.required'=>'Bạn chưa nhập Tên sản phẩm',
            'price.required'=>'Bạn chưa nhập giá của sản phẩm',
            'image.required'=>'Bạn chưa chọn hình ảnh cho sản phẩm',
            'description.required'=>'Bạn chưa nhập mô tả của sản phẩm',
        ]);
        $products = new products;
        $products->name = $request->name;
        $products->weight = $request->weight;
        $products->price = $request->price;
        if ($request->hasFile('image')) {
            $file =$request->file('image');
            $name = $file->getClientOriginalName();
            $image =  $name;
            $file->move('codeADM/images/product', $name);
            $products->image = $image;
        }else{
            $products->image = "";
        }
        $products->id_type = $request->id_type;
        $products->description = $request->description;
        $products->save();
        return redirect('admin/product/list')->with('thongbao','Thêm Sản phẩm mới thành công');
    }
    // sửa sản phẩm
    public function getEdit($id)
    {
        $type = type_product::all();
        $sp= products::find($id);
        return view('admin.product.edit ',['sp'=>$sp])->with('type',$type);
    }
    public function postEdit(Request $request ,$id){
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required'
        ],[
            'name.required'=>'Bạn chưa chọn hình ảnh cho sản phẩm',
            'price.required'=>'Bạn chưa chọn hình ảnh cho sản phẩm',
            'image.required'=>'Bạn chưa chọn hình ảnh cho sản phẩm',
            'description.required'=>'Bạn chưa chọn hình ảnh cho sản phẩm'
        ]);
        $sp = products::find($request->id);
        $sp->name = $request->name;
        $sp->price = $request->price;
        if ($request->hasFile('image')) {
            $file =$request->file('image');
            $name = $file->getClientOriginalName();
            $image =  $name;
            $file->move('codeADM/images/product', $name);
            $sp->image = $image;
        }else{
            $sp->image = "";
        }
        $sp->id_type = $request->id_type;
        $sp->description = $request->description;
        $sp->save();
        return redirect('admin/product/list')->with('thongbao','cập nhật thành công');
    }
    // xóa sản phẩm
    public function getDelete($id){
        $product = products::find($id);
        $product->delete();
        return redirect('admin/product/list')->with('thongbao','xóa sản phẩm thành công');
    }
    // tim kiem sp
    public function getSearch(Request $req){
        $loai = type_product::all()->toArray();
        $product = products::where('name','like','%'.$req->key.'%')
                        ->orWhere('price',$req->key)
                        ->get();
        return view('admin.product.search',compact('product'))->with('type_Products',$loai);
    }

}
