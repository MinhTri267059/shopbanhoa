@extends('user.master')
@section('content')	
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					@foreach($product as $pro)
					<div class="row">
						<div class="col-sm-4">
							<img src="../resources/upload/{{$pro->image}}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title"><strong>{{$pro->name}}</strong></p>
								<p class="single-item-price">
									<span>{{$pro->price_new}}</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$pro->intro}}</p>
							</div>
							<div class="space20">&nbsp;</div>
					
							<p>Options:</p>
							<div class="single-item-options">
								<select class="wc-select" name="size">
									<option>Size</option>
									<option value="XS">XS</option>
									<option value="S">S</option>
									<option value="M">M</option>
									<option value="L">L</option>
									<option value="XL">XL</option>
								</select>
								<select class="wc-select" name="color">
									<option>Color</option>
									<option value="Red">Red</option>
									<option value="Green">Green</option>
									<option value="Yellow">Yellow</option>
									<option value="Black">Black</option>
									<option value="White">White</option>
								</select>
								<select class="wc-select" name="color">
									<option>Qty</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
							<li><a href="#tab-reviews">Reviews ({{count($comment)}})</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$pro->description}} </p>
						</div>
						<div class="panel" id="tab-reviews">
							@foreach($comment as $cmt)
							<p>{{$cmt->description}}  {{$cmt->created_at}}</p>
							@endforeach
						</div>
					</div>
					<div class="well">
						@if(session('thongbao'))
							{{session()}}
						@endif
						<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
						<form action="comment/{{$pro->cate_id}}/{{$pro->id}}" method="post" role="form">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div><textarea class="form-control"name="NoiDung" rows="3"></textarea></div>
							<button type="submit" class="btn btn-primary">Send</button>
						</form>
					</div>
					
					@endforeach
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Related Products</h4>
						@foreach($product1 as $pro)
						<div class="row" style="float:left">
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}"><img src="../resources/upload/{{$pro->image}}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$pro->name}}</p>
										<p class="single-item-price">
											<span>{{$pro->new_price}}</span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="chi-tiet-san-pham/{{$pro->cate_id}}/{{$pro->id}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection