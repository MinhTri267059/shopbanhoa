<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $this->validate($request,[
           // 'txtUser'=>'required|unique:User,name|min:3|max:100',
            'txtEmail'=> 'required|email',
            'txtPass'=> 'required|numeric|min:6',
            'txtPhone' => 'required|numeric|size:11'
        ],
        [
            // 'txtUser.required'=>'Bạn chưa nhập tên ',
            'txtEmail.required'=>'Bạn chưa nhập Email ',
            // 'txtUser.unique'=>'Tên  đã tồn tại',
            'txtUser.min'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự ',
            'txtUser.max'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự',
            'txtPass.min'=>'Mật khẩu phải có độ dài ít nhất 3 ký tự ',
        ]);
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
            return redirect()->route('admin.user.list')->with('thongbao','xóa thành công');
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
    public function getDangNhap(){
        
    }
}
