<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\type_product;
use Illuminate\Http\Request;

class Type_ProductController extends Controller
{
    // danh sach
    public function getList()
    {
        $type_Products = type_product::all()->toArray();
        return view('admin.type_product.list')->with('type_Products',$type_Products);
    }
    // them loai sp
    public function getAdd()
    {
        return view('admin.type_product.add');
    }
    public function insert(Request $request){
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required'=>'Bạn chưa chưa nhập tên loại sản phẩm',
        ]);
        $type = new type_product;
        $type->name = $request->name;
        $type->save();
        return redirect('admin/type_product/list')->with('thongbao','Thêm loại Sản phẩm mới thành công');
    }
    // sua loai sp

    public function getEdit($id)
    {
        $data= type_product::find($id);
        return view('admin.type_product.edit ',['data'=>$data]);
    }
    public function postEdit(Request $request ,$id){
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required'=>'Bạn chưa chưa nhập tên loại sản phẩm',
        ]);
        $data= type_product::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect('admin/type_product/edit/'.$data->id_type)->with('thongbao','cập nhật thành công');
    }
    public function delete2($id){
        $delete = type_product::where('id_type',$id);
        $delete->delete();
        return redirect('admin/type_product/list')->with('thongbao','xóa thàng công');
    }
 }
