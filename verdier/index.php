<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			/*carousel*/
			var owl=$("#owl");
			owl.owlCarousel({
				items : 1, //10 items above 1000px browser width
				navigation : true,
				pagination :  false
			});
			var owl=$("#owl1");
			owl.owlCarousel({
				items : 1, //10 items above 1000px browser width
				navigation : true,
				pagination :  false
			});
		})
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		
	</head>

	<body class="page1" id="top">
<!--==============================header=================================-->
	<!-- Include de HEADER -->
		<?php include('header.php'); ?>
	
	
	
	
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="centered">
					<div class="grid_12">
						
					</div>
				<div class="clear"></div>
				</div><!--cierra el div centered-->
			</div><!--cierra el div container 12-->
			

				
				
			
					<div class="clear"></div>
					
					
				
		
		
					</div>

		<!--borre un div que cierra el div container 12-->

<!--==============================footer=================================-->
			<!-- Include de FOOTER -->
		<?php include('footer.php'); ?>
	</body>
</html>