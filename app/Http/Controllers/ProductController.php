<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Product_image;
use App\Product_size;
use File;
use Auth;

class ProductController extends Controller
{
    public function getList(){
    	 $product = Product::all();
        return view('user.admin.product.product_list',['product'=>$product]);
    }
    public function getAdd(){
    	$category = Category::select('name','id','parent_id')->get()->toArray();
        return view('user.admin.product.product_add',compact('category'));
    }

    public function postAdd(Request $request) {
        $file= $request->file('fImages');
        $file_name = $file->getClientOriginalName();
        $file->move('../resources/upload',$file_name);
        $product = new Product();
        $product->name = $request->txtName;
        $product->alias = changeTitle($request->txtName);
        $product->price = $request->txtPrice;
        $product->price_new = $request->txtPriceNew;
        $product->status = $request->txtStatus;
        $product->intro = $request->txtIntro;
        $product->content = $request->txtContent;
        $product->description = $request->txtDescription;
        $product->image=$file_name;
        $product->cate_id = $request->txtCateId;

        if ($request->hasFile('fProductDetail')) {
            //print_r(Input::file('fProductDetail'));
            foreach ($request->file('fProductDetail') as $file_image) {
                $product_img = new Product_image();
                if (isset($file_image)) {
                    $product_img->image = $file_image->getClientOriginalName();
                    $product_img->product_id = $request->txtCateId;
                    $file_image->move('../resources/upload/detail',$file_image->getClientOriginalName());
                    $product_img->save();
                }
            }
        }       
        
        $product->save();
        return redirect('admin/product/list')->with('thongbao','Thêm thành công');        
    }

    public function getEdit(){
    	return view('user.admin.product.product_edit');
    }
    public function postEdit(){
    	return view('user.admin.product.product_edit');
    }
    public function getDelete(){
        return view('user.admin.product.product_edit');
    }

}
