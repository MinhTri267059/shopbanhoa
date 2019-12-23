<div id="header">
		<div class="header-top color-div">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i>CTXH UIT</a></li>
						<li><a href=""><i class="fa fa-phone"></i>0945837200</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="dang-ky">Đăng kí</a></li>
						<li><a href="dang-nhap">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="index.html" id="logo"><img src="user
						/assets/dest/images/logo.png"  alt=""> CTXH UIT</a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div ><i class="fa fa-shopping-cart"></i> </div>
							
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom color-div">
			<div class="container">
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index">Trang chủ</a></li>
						<li><a href="loai-san-pham">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($category as $cate)
								<li><a href="loai-san-pham/{{$cate->parent_id}}">{{$cate->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<!-- <li><a href="loai-san-pham">Hoa Khô</a>
							<ul class="sub-menu">
								<li><a href="product_type.html">Hoa Giấy</a></li>
								<li><a href="product_type.html">Hoa Sấy</a></li>
								<li><a href="product_type.html">Hoa Giả</a></li>
							</ul>
						</li> -->
						<li><a href="gioi-thieu">Giới thiệu</a></li>
						<li><a href="lien-he">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->