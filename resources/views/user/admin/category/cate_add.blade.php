@extends('user.master_admin')
@section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-left: 100px">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
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
                        <form action="admin/category/add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}} "/>
                           
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Parent ID</label>
                                <input class="form-control" name="txtParentID" placeholder="Please Enter Category Parent ID" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea id="demo" class="ckeditor" name="txtDescription"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
   </div>
@endsection