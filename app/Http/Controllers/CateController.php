<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CateController extends Controller
{
    public function getList(){
        $category = Category::all();
    	return view('user.admin.category.cate_list',['category'=>$category]);
    }
    public function getAdd(){
    	return view('user.admin.category.cate_add');
    }
    public function postAdd(Request $request){
        $this->validate($request,[
           'txtCateName'=>'required|unique:Category,name|min:3|max:100'
        ],
        [
            'txtCateName.required'=>'Bạn chưa nhập tên thể loại',
            'txtCateName.unique'=>'Tên thể loại đã tồn tại',
            'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự ',
            'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự',
        ]);
        $category = new Category;
        $category->name=$request->txtCateName;
        $category->parent_id=$request->txtParentID;
        $category->alias= changeTitle($request->txtCateName);
        $category->description=$request->txtDescription;
        $category->save();

        return redirect('admin/category/add')->with('thongbao','Thêm thành công');
    	//return view('user.admin.category.cate_add');
    }
    public function getEdit($id){
        $category = Category::find($id);
    	return view('user.admin.category.cate_edit',['category'=>$category]);
    }
    public function postEdit(Request $request,$id){
    	$category = Category::find($id);
        $this->validate($request,[
            'txtCateName'=>'required|unique:Category,name|min:3|max:100'
        ],
        [
            'txtCateName.required'=>'Bạn chưa nhập tên thể loại',
            'txtCateName.unique'=>'Tên thể loại đã tồn tại',
            'txtCateName.min'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự ',
            'txtCateName.max'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự',
        ]
        );
        $category->name=$request->txtCateName;
        $category->parent_id=$request->txtParentID;
        $category->alias=changeTitle($request->txtCateName);
        $category->description=$request->txtDescription;
        $category->save();
         return redirect("admin/category/edit/".$id)->with('thongbao','sửa thành công');
    }
    public function getDelete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list')->with('thongbao','dã xóa thành công');
    }
}
