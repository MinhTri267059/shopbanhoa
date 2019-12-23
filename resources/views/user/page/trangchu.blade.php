@extends('user.master')
@section('content')	
@if(session('thongbao'))
    <div class="alert alert-success">
        {{session('thongbao')}}
    </div>
@endif
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
						    <div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
								@foreach($slide as $sl)
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="user/image/slide/{{$sl->Image}}" data-src="user/image/slide/{{$sl->Image}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('user/image/slide/{{$sl->Image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

							        </li>
								@endforeach								
								</ul>	
							</div>
						</div>
					</div>
	</div>
	<!--slider-->
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						
						<div class="beta-products-list">
							<center><h1>Bó Hoa</h1></center>
							<a href="product.html"><img src="user/assets/dest/images/ads/1.png" alt="ads1"></a>	
						<!-- 	<p>Số sản phẩm tìm thấy {{count($product1)}}</p> -->
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>

							<div class="row wow fadeInRight" >
								@foreach($product1 as $pro)
									<!-- @if($pro->cate_id == 1) -->
										<div class="col-sm-3">
											<div class="single-item">
												@if($pro->price > $pro->price_new)
														<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
														<div class="single-item-header">
												@else
														<div class="single-item-header">
												@endif

													<a href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}"><img src="../resources/upload/{{$pro->image}}" alt=""></a>
												</div>
												<div class="single-item-body">
													<p class="single-item-title" >{{$pro->name}}</p>
													@if($pro->price > $pro->price_new)
														<p class="single-item-price">
															<span class="flash-del">{{$pro->price }}</span>
															<span class="flash-sale">{{$pro->price_new }}</span>
														</p>
													@else
														<p class="single-item-price">
															<span class="flash">{{$pro->price }}</span>						
														</p>
													@endif
												</div>
												<div class="single-item-caption">
													<a class="add-to-cart " href="addCart/{{$pro->id}}"><i class="fa fa-shopping-cart color-div"></i></a>
													<a class="beta-btn primary" href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									<!-- @endif -->
								@endforeach
								
								
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<center><h1>Lẵng Hoa</h1></center>
							<a href="product.html"><img src="user/assets/dest/images/ads/1.png" alt="ads1"></a>
							<!-- <p>Số sản phẩm tìm thấy {{count($product2)}}</p>	 -->
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row wow fadeInLeft" >
								@foreach($product2 as $pro)
									<!-- @if($pro->cate_id == 2) -->
										<div class="col-sm-3">
											<div class="single-item">
												@if($pro->price > $pro->price_new)
														<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
														<div class="single-item-header">
												@else
														<div class="single-item-header">
												@endif

													<a href="product.html"><img src="../resources/upload/{{$pro->image}}" alt=""></a>
												</div>
												<div class="single-item-body">
													<p class="single-item-title" >{{$pro->name}}</p>
													@if($pro->price > $pro->price_new)
														<p class="single-item-price">
															<span class="flash-del">{{$pro->price }}</span>
															<span class="flash-sale">{{$pro->price_new }}</span>
														</p>
													@else
														<p class="single-item-price">
															<span class="flash">{{$pro->price }}</span>						
														</p>
													@endif
												</div>
												<div class="single-item-caption">
													<a class="add-to-cart " href="addCart/{{$pro->id}}"><i class="fa fa-shopping-cart color-div"></i></a>
													<a class="beta-btn primary"  href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									<!-- @endif -->
								@endforeach							
								
						</div>
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<center><h1>Giỏ Hoa</h1></center>
							<a href="product.html"><img src="user/assets/dest/images/ads/1.png" alt="ads1"></a>	
						<!-- 	<p>Số sản phẩm tìm thấy {{count($product3)}}</p> -->
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row wow fadeInDown" >
								@foreach($product3 as $pro)
										<!-- @if($pro->cate_id == 3) -->
											<div class="col-sm-3">
												<div class="single-item">
													@if($pro->price > $pro->price_new)
														<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
														<div class="single-item-header">
													@else
														<div class="single-item-header">
													@endif

														<a href="product.html"><img src="../resources/upload/{{$pro->image}}" alt=""></a>
													</div>
													<div class="single-item-body">
														<p class="single-item-title" >{{$pro->name}}</p>
														@if($pro->price > $pro->price_new)
															<p class="single-item-price">
																<span class="flash-del">{{$pro->price }}</span>
																<span class="flash-sale">{{$pro->price_new }}</span>
															</p>
														@else
															<p class="single-item-price">
																<span class="flash">{{$pro->price }}</span>						
															</p>
														@endif
													</div>

													<div class="single-item-caption">
														<a class="add-to-cart " href="addCart/{{$pro->id}}"><i class="fa fa-shopping-cart color-div"></i></a>
														<a class="beta-btn primary"  href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										<!-- @endif -->
								@endforeach							
									
							</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->			
@endsection