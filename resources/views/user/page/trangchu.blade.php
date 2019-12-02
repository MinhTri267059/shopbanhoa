@extends('user.master')
@section('content')	
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
							<center><h2>Hoa Khô</h2></center>
							<a href="product.html"><img src="user/assets/dest/images/ads/1.png" alt="ads1"></a>	
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">

											<a href="product.html"><img src="user/assets/dest/images/products/hoakho_baby.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa Khô Baby</p>
											<p class="single-item-price">
												<span class="flash-del">120.000VND</span>
												<span class="flash-sale">100.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoakho_glixia.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa Khô GliXia</p>
											<p class="single-item-price">
												<span class="flash-del">150.000VND</span>
												<span class="flash-sale">120.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoakho_oaihuong.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa Khô Oải Hương</p>
											<p class="single-item-price">
												<span>90.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoakho_nhapkhau.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa Khô Nhập Khẩu</p>
											<p class="single-item-price">
												<span>150.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<center><h2>Hoa Tươi</h2></center>
							<a href="product.html"><img src="user/assets/dest/images/ads/1.png" alt="ads1"></a>	
							<div class="beta-products-details">
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_1.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 1</p>
											<p class="single-item-price">
												<span class="flash-del">150.000VND</span>
												<span class="flash-sale">120.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_2.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 2</p>
											<p class="single-item-price">
												<span class="flash-del">180.000VND</span>
												<span class="flash-sale">150.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_3.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 3</p>
											<p class="single-item-price">
												<span>100.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_4.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 4</p>
											<p class="single-item-price">
												<span>120.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="space40">&nbsp;</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_5.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 5</p>
											<p class="single-item-price">
												<span>100.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_6.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 6</p>
											<p class="single-item-price">
												<span class="flash-del">200.000VND</span>
												<span class="flash-sale">190.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_7.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 7</p>
											<p class="single-item-price">
												<span>150.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img src="user/assets/dest/images/products/hoatuoi_8.png" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">Hoa 8</p>
											<p class="single-item-price">
												<span>170.000VND</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->			
@endsection