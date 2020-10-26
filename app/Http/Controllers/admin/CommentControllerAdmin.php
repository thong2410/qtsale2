<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentControllerAdmin extends Controller
{
    public function GetProductdetails(Request $request){
        $data['comments'] = Comment::all();
        return view('admin/comment/list', $data);
    }
    public function getDelete($id){
        $delete = Comment::where('comment_id',$id);
        $delete->delete();
        return redirect('admin/comment/list')->with('thongbao','xóa thàng công');
    }
}
