<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
class UserController extends Controller
{
    public function getList(){
        $user= User::all();
    	return view('user.admin.user_ad.user_list',['user'=>$user]);
    }
    public function getAdd(){
    	return view('user.admin.user_ad.user_add');
    }
    public function postAdd(Request $request){
    	$user = new User();
        $user->username = $request->txtUser;
        $user->fullname = $request->txtFName;
        $user->mail = $request->txtEmail;
        $user->password = bcrypt($request->txtPass);
        $user->gender = $request->rdoGender;
        $user->address = $request->txtAddress;
        $user->phone = $request->txtPhone;
        $user->level = $request->rdoLevel;
        $user->status = "Offline";
        $user->remember_token = $request->_token;
        $user->save();
        
        return redirect('admin/user/list')->with('thongbao','Thêm thành công');  
    }
    public function getDelete($id){
        // $user_current_login = Auth::user()->id;
        $user = User::find($id);
        // if (($id == 1) || ($user_current_login != 1 && $user["level"] == 1)) {
        //     return redirect('admin/user/list')->with('thongbao','không được xóa '); 
        // }else{
            $user->delete($id);
            return redirect()->route('admin.user.list')->with(['flash_level'=>'success','flash_message'=>'Delete User Complete Success!']);
        // }
    }
    public function getEdit($id){
    	$user = User::find($id);
        return view('user.admin.user_ad.user_edit',['user'=>$user]);
    }
    public function postEdit(request $request,$id){
    	$user = User::find($id);
        $user->username = $request->txtUser;
        $user->fullname = $request->txtFName;
        $user->mail = $request->txtEmail;
        $user->password = bcrypt($request->txtPass);
        $user->gender = $request->rdoGender;
        $user->address = $request->txtAddress;
        $user->phone = $request->txtPhone;
        $user->level = $request->rdoLevel;
        $user->status = "Offline";
        $user->remember_token = $request->_token;
        $user->save();
        
        return redirect('admin/user/list')->with('thongbao','sửa thành công');  
    }
}
