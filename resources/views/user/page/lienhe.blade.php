@extends('user.master')
@section('content')	
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index">Home</a> / <span>Contacts</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Contact Form</h2>
					<div class="space20">&nbsp;</div>
					<p>Sẵn lòng ghi nhận những phản hồi từ bạn</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Your Name (required)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Your Email (required)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Subject">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Your Message"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Send Message <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4 ">
					<h2>Contact Information</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Address</h6>
					<p>
						Số 1 Hàn Thuyên, khu phố 6, phường Linh Trung, quận Thủ Đức<br>
						Hồ Chí Minh
					</p>
					<div class="space20">&nbsp;</div>
					
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection