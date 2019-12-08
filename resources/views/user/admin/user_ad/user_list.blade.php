
@extends('user.master_admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row" style="margin-left: 100px">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($user as $us)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$us->id}}</td>
                                    <td>{{$us->username}}</td>
                                    <td>
                                        @if($us->level==1)
                                        {{"admin"}}
                                        @else
                                        {{"thường"}}
                                        @endif
                                    </td>
                                    <td>{{$us->status}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return xacnhanxoa('Are you sure you want to delete?')" href="admin/user/delete/{{$us->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/edit/{{$us->id}}">Edit</a></td>
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