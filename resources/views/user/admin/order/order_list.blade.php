@extends('user.master_admin')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Order
        <small>List Order</small>
    </h1>
</div>
<!-- /.col-lg-12 -->
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Total</th>
            <th>Payment</th>
            <th>Customer Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Product Name</th>
            <th>Action</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach($order as $ord)
        <?php $stt = $stt + 1 ?>
        <tr class="" align="center">
            <td>{{$stt}}</td>
            <td>{{$ord->total}}</td>
            <td>{{$ord->payment}}</td>
            <td>{{$ord->name}}</td>
            <td>{{$ord->phone}}</td>
            <td>{{$ord->address}}</td>
            <td>{{$ord->product_name}}</td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Detail</a></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return xacnhanxoa('Are you sure you want to delete?')" href="admin/order/delete/{{$ord->id}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
