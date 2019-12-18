<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return redirect('admin/order/list')->with('thongbao','dã xóa thành công');
    }
}
