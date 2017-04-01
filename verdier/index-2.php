<?php 
include ('library/funciones_html.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Projects</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/touchTouch.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/sForm.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/touchTouch.jquery.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('.gallery a.gal').touchTouch();
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
	</head>
	<body id="top" class="page1">
<!--==============================header=================================-->
		<!-- Include de HEADER -->
		<?php include('header.php'); ?>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"></div>
			<div class="container_12">
			<div class="container_centro">
				<div class="grid_12">
					<h2>Projects</h2>
				</div>
				<div class="clear"></div>
<br><br>
				<div class="gallery">
					
					<div class="clear"></div>
										<?php cargarProyectos(); ?>

					
				</div>
			</div>
			</div>
		</div>
		<br><br>
<!--==============================footer=================================-->
		
		<!-- Include de FOOTER -->
		<?php include('footer.php'); ?>
	</body>
</html>