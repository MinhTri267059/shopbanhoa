@extends('user.master')
@section('content')
<div id="content" style="margin-left: 30px; margin-right:30px;">
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
            @foreach($product as $pro)
            <form action="dathang/{{$pro->id}}" method="GET" enctype="multipart/form-data">
            @endforeach
                <input type="hidden" name="_token" value="{{csrf_token()}} "/>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Đặt hàng</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-group">
                            <label >Họ tên</label>
                            <input type="text" name="txtName" placeholder="Họ tên" />
                        </div>

                        <div class="form-group">
                            <label >Địa chỉ</label>
                            <input type="text" name="txtAddress" placeholder="Street Address" />
                        </div>
                        
                        <div class="form-group">
                            <label >Điện thoại</label>
                            <input type="text" name="phone" />
                        </div>
                        
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                @foreach($product as $pro)
                                <div class="your-order-item">
                                    <div>
                                    <!--  one item   -->

                                        <div class="media">
                                            <img width="25%" src="../resources/upload/{{$pro->image}}" alt="" class="pull-left">
                                            <div class="media-body">
                                                <p class="font-large">{{$pro->name}}</p>
                                                <span class="color-gray your-order-info">Số lượng: 1</span>
                                            </div>
                                        </div>
                                    <!-- end one item -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="your-order-item">
                                    <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                                    <div class="pull-right"><h5 class="color-black" name="total">{{$pro->price_new}}</h5></div>
                                    <div class="clearfix"></div>
                                </div>
                                
                            </div>
                            <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
                            
                            <div class="your-order-body">
                                <ul class="payment_methods methods">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
                                        <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
                                        </div>                      
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
                                        <label for="payment_method_cheque">Chuyển khoản </label>
                                        <div class="payment_box payment_method_cheque" style="display: none;">
                                            Chuyển tiền đến tài khoản sau:
                                            <br>- Số tài khoản: 123 456 789
                                            <br>- Chủ TK: Trương Minh Trí
                                            <br>- Ngân hàng ACB, Chi nhánh TPHCM
                                        </div>                      
                                    </li>
                                    
                                </ul>
                            </div>
            
                            <button type="submit" class="btn btn-default">Đặt hàng</button>
                            @endforeach
                        </div> <!-- .your-order -->
                    </div>
                </div>

            </form>
        </div> <!-- #content -->
@endsection