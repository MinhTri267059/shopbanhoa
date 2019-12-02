
@extends('user.master_admin')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-left: 100px">
                    <div class="col-lg-12" >
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Intro</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $pro)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$pro->id}}</td>
                                    <td>{{$pro->name}}</td>
                                    <td>{{$pro->price}}</td>
                                    <td>{{$pro->intro}}</td>
                                    <td>{{$pro->status}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/delete/{{$pro->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/edit/{{$pro->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection