<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
class CommentController extends Controller
{
    public function getList(){
      $comment = Comment::all();
    	return view('user.admin.comment.comment_list',['comment'=>$comment]);
    }
    public function getDelete($id){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/comment/list')->with('thongbao','dã xóa thành công');
    }
    public function postComment($cate,$id, Request $request){
       $comment = new Comment;
       $comment->pro_id=$id;
       $comment->description=$request->NoiDung;
       $comment->save();
       return redirect('chi-tiet-san-pham/'.$cate.'/'.$id.'.html')->with('thongbao','viết bình luận thành công');

    }
}
