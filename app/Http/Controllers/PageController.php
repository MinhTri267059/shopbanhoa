<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $slide=Slide::all();
        $product=Product::all();
        view()->share('slide',$slide);
        view()->share('product',$product);

    }
    public function getIndex(){
    	
    	return view('user.page.trangchu');
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

    public function getDangNhap(){
        return view('user.login');
    }
    public function getDangKy(){
        return view('user.signup');
    }
}
