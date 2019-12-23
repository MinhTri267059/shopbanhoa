<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Product;
use App\Order;
class OrderController extends Controller
{
    public function getList(){
      $order = Order::all();
    	return view('user.admin.order.order_list',['order'=>$order]);
    }
    public function getDelete($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('admin/order/list')->with('thongbao','Đã xóa thành công');
    }
    public function dathang(Request $request,$id){
       	$product=Product::find($id);
        $order=new Order();
        $order->total=$product->price_new;
        $order->payment=$request->payment_method;
        $order->name=$request->txtName;
        $order->address=$request->txtAddress;
        $order->phone=$request->phone;        
        $order->product_name=$product->name;
        $order->save();
        return redirect('index')->with('thongbao','đặt hàng thành công');
    }
}
