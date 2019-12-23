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
        $this->validate($request,[
            'txtName'=>'required|unique:Product,name|min:3|max:100'
        ],
        [
            'txtName.required'=>'Bạn chưa nhập tên thể loại',
            'txtName.unique'=>'Tên thể loại đã tồn tại',
            'txtName.min'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự ',
            'txtName.max'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự',
        ]
        );
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

        // if ($request->hasFile('fProductDetail')) {
        //     //print_r(Input::file('fProductDetail'));
        //     foreach ($request->file('fProductDetail') as $file_image) {
        //         $product_img = new Product_image();
        //         if (isset($file_image)) {
        //             $product_img->image = $file_image->getClientOriginalName();
        //             $product_img->product_id = $request->txtCateId;
        //             $file_image->move('../resources/upload/detail',$file_image->getClientOriginalName());
        //             $product_img->save();
        //         }
        //     }
        // }       #
        
        $product->save();
        return redirect('admin/product/add')->with('thongbao','Thêm thành công');        
    }

    public function getEdit($id){
    	$product = Product::find($id);
        return view('user.admin.product.product_edit',['product'=>$product]);
    }
    public function postEdit(Request $request,$id){
        $product=Product::find($id);
        $this->validate($request,[
            'txttxtName'=>'required|unique:Product,name|min:3|max:100'
        ],
        [
            'txtName.required'=>'Bạn chưa nhập tên thể loại',
            'txtName.unique'=>'Tên thể loại đã tồn tại',
            'txtName.min'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự ',
            'txtName.max'=>'Tên thể loại phải có độ dài từ 3 ký tự cho đến 100 ký tự',
        ]
        );
        $product->name = $request->txtName;
        $product->alias = changeTitle($request->txtName);
        $product->price = $request->txtPrice;
        $product->price_new = $request->txtPriceNew;
        $product->status = $request->txtStatus;
        $product->intro = $request->txtIntro;
        $product->content = $request->txtContent;
        $product->description = $request->txtDescription;
        $product->cate_id = $request->txtCateId;
        if($request->hasFile('fImages'))
        {   
           
            File::delete('../resources/upload/'.$product->image);
            
            $file= $request->file('fImages');
            $file_name = $file->getClientOriginalName();
            $file->move('../resources/upload',$file_name);
            $product->image=$file_name;
        }
        $product->save();
        return redirect('admin/product/list')->with('thongbao','sửa thành công');   

    	
    }
    public function getDelete($id){
        // $product_detail = Product::find($id)->product_image->toArray();
        // foreach ($product_detail as $value) {
        //     File::delete('../resources/upload/detail/'.$value["image"]);
        // }
        $product = Product::find($id);
        File::delete('../resources/upload/'.$product->image);
        $product->delete($id);
        return redirect('admin/product/list')->with('thongbao','xóa thành công');
    }

}
