<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use App\Category;
use App\Comment;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class PageController extends Controller
{
    public function __construct()
    {
        $slide=Slide::all();
        $product=Product::all();
        $category=Category::all();
        $comment=Comment::all();
        View()->share('comment',$comment);
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
        
    	$product=Product::where('cate_id',$id)->paginate(8);
        return view('user.page.loai_sanpham',compact('product'));
    }
    public function getChiTietSP($cate,$id){
        $product=Product::where('id',$id)->get();
        $product1=Product::where('cate_id',$cate)->paginate(3);
        $comment=Comment::where('pro_id',$id)->get();
      
    	return view('user.page.chitiet_sanpham',compact('product','product1','comment'));
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
    public function getHome(){
        $product=Product::all();
        $category=Category::all();
        $user=User::all();
        $comment=Comment::all();
        $order=Order::all();
        return view('user.admin.dashbroad.home',compact('product','category','user','comment','order'));
    }
    public function addCart($id){
        $product=Product::where('id',$id)->get();
        return view('user.page.dathang',compact('product'));
    }
    public function dathang(Request $request,$id,$val){
        $product=Product::where('id',$id)->get();
        $order=new order();
        $order->total=$val;
        $order->payment=$request->payment_method;
        $order->name=$request->name;
        $order->phone=$request->phone;
        $order->address=$request->address;
        $order->save();
        return view('user.page.loai_sanpham')->with('thongbao','đặt hàng thành công');
    }
}
