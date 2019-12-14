@extends('user.master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li  class="is-active"><a href="#">Hoa tươi</a></li>
							<li><a href="#">Hoa khô</a></li>					
							<li><a href="#">Lẵng hoa</a></li>
						
						</ul>
					</div>
					<div class="col-sm-9 wow fadeInRight">
						
						<div class="row wow fadeInRight" >
								
								@foreach($product as $pro)
								
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
													<a class="add-to-cart " href="shopping_cart.html"><i class="fa fa-shopping-cart color-div"></i></a>
													<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									
								@endforeach
							</div>
						<div class="space50">&nbsp;</div>
						<div class="row">{{$product->links()}}</div>

						
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection