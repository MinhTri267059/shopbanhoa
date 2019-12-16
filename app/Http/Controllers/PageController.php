<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PageController extends Controller
{
    public function __construct()
    {
        $slide=Slide::all();
        $product=Product::all();
        $category=Category::all();
        view()->share('slide',$slide);
        view()->share('product',$product);
        view()->share('category',$category);

    }
    public function getIndex(){
    	$product1=Product::where('cate_id',1)->paginate(8);
        $product2=Product::where('cate_id',2)->paginate(8);
        $product3=Product::where('cate_id',3)->paginate(8);

    	return view('user.page.trangchu',compact('product1','product2','product3'));
    }
    public function getLoaiSP($id){
        if($id==1)
        {
            $product=Product::where('cate_id',1)->paginate(8);
            return view('user.page.loai_sanpham',compact('product'));
        }
        if($id==2)
        {
            $product=Product::where('cate_id',2)->paginate(8);
            return view('user.page.loai_sanpham',compact('product'));
        }
        if($id==3)
        {
            $product=Product::where('cate_id',3)->paginate(8);
            return view('user.page.loai_sanpham',compact('product'));
        }
    	
    }
    public function getChiTietSP($id){
        $product=Product::where('id',$id)->get();

    	return view('user.page.chitiet_sanpham',compact('product'));
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
