@extends('user.master_admin')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-left: 100px">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div>
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
                        <form action="admin/product/add" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}} "/>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Category ID</label>
                                <input class="form-control" name="txtCateId" placeholder="Please Enter Category ID" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter Price" type="number" />
                            </div>
                             <div class="form-group">
                                <label>Price New</label>
                                <input class="form-control" name="txtPriceNew" placeholder="Please Enter Price New" type="number" />
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <input class="form-control" name="txtStatus" placeholder="Please Status" />
                            </div>
                            <div class="form-group">
                                <label>Intro</label>
                                <textarea id="demo" class="ckeditor" name="txtIntro"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea id="demo" class="ckeditor"name="txtContent"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="fImages">
                            </div>
                        
                           <!--  <div>
                                @for($i = 1; $i <= 3 ; $i++)
                                <div class="form-group">
                                    <label>Product Image Detail {!! $i !!}</label>
                                    <input type="file" name="fProductDetail[]"/>
                                </div>
                                @endfor
                            </div> -->

                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea id="demo" class="ckeditor" name="txtDescription"></textarea>
                            </div>
                            
                            <div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection