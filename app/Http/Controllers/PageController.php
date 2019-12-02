<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	$slide=Slide::all();
    	return view('user.page.trangchu',compact('slide'));
    }
    public function getLoaiSP(){
    	return view('user.page.loai_sanpham');
    }
    public function getChiTietSP(){
    	return view('user.page.chitiet_sanpham');
    }
    public function getGioiThieu(){
    	return view('user.page.gioithieu');
    }
    public function getThongTinDH(){
    	return view('user.page.thongtin_donhang');
    }
    public function getLienHe(){
    	return view('user.page.lienhe');
    }

    
}
