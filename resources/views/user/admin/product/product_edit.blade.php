@extends('user.master_admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-left: 100px">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>{{$product->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="admin/product/edit/{{$product->id}}" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}} "/>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{{$product->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder=""value="{{$product->price}}" />
                            </div>
                            <div class="form-group">
                                <label>Price New</label>
                                <input class="form-control" name="txtPriceNew" placeholder=""value="{{$product->price_new}}" />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" name="txtStatus" placeholder=""value="{{$product->status}}" />
                            </div>
                            <div class="form-group">
                                <label>Intro</label>
                                <textarea id="demo" class="ckeditor" rows="3" name="txtIntro">{{$product->intro}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea id="demo" class="ckeditor" name="txtContent">{{$product->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Images</label><br>
                                <img src="../resources/upload/{{$product->image}}" alt="ads1">
                                <input type="file" name="fImages">
                            </div>
                            <div class="form-group">
                                <label>Category ID</label>
                                <input class="form-control" name="txtCateId" placeholder="Please Enter Category Keywords" value="{{$product->cate_id}}" />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea id="demo" class="ckeditor" name="txtDescription" rows="3">{{$product->description}}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Product Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
