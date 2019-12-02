<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getList(){
    	return view('user.admin.user_ad.user_list');
    }
    public function getAdd(){
    	return view('user.admin.user_ad.user_add');
    }
    public function postAdd(){
    	return view('user.admin.user_ad.user_add');
    }
    public function getEdit(){
    	return view('user.admin.user_ad.user_edit');
    }
    public function postEdit(){
    	return view('user.admin.user_ad.user_edit');
    }
}
