<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shop hoa CTXH</title>
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="user/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="user/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="user/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="user/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" href="user/assets/dest/css/animate.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" title="style" href="user/assets/dest/css/huong-style.css">
	<link rel="stylesheet" title="style" href="user/assets/dest/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

	@include('user.header_admin')
	<div class="rev-slider" >
		
	</style>
		
		@yield('content')
	</div>
	
	</div> <!-- .container -->
	@include('user.footer')
	

	<!-- include js files -->
	<script src="user/assets/dest/js/jquery.js"></script>
	<script src="user/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="user/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="user/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="user/assets/dest/vendors/animo/Animo.js"></script>
	<script src="user/assets/dest/vendors/dug/dug.js"></script>
	<script src="user/assets/dest/js/scripts.min.js"></script>
	<script src="user/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="user/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="user/assets/dest/js/waypoints.min.js"></script>
	<script src="user/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="user/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	<script type="text/javascript" language="javascript" src="admin_asset/ckeditor/ckeditor.js" ></script>
</body>
</html>
