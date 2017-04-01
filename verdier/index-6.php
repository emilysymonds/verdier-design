<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
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
				<div class="grid_8">
					<h2>How to Find Us</h2>		<br><br>

					<div class="map">
						<div class="img_block fleft">
							<figure class="img_inner">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.6947315042735!2d-56.06681590000001!3d-34.8890112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f8661a829c483%3A0xa8f6f5460f65076!2sEstudio+Paisaj%C3%ADstico+Verdier!5e0!3m2!1sen!2s!4v1394028415369" width="400" height="300" frameborder="0" style="border:0"></iframe><br /><small><a href="https://maps.google.com/maps?q=-34.887656,-56.062978&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;iwloc=A&amp;ll=-34.887656,-56.062978&amp;source=embed"</a></small>
					
						
							
							</figure>
							<span class="l"></span>
							<span class="ll"></span>
							<span class="r"></span>
							<span class="rr"></span>
							<span class="lb"></span>
							<span class="llb"></span>
							<span class="rb"></span>
							<span class="rrb"></span>
						</div>
						<div class="extra_wrapper">
													
							<address><a href="https://www.google.com/maps/place/Estudio+Paisaj%C3%ADstico+Verdier/@-34.8890112,-56.0668159,17z/data=!3m1!4b1!4m2!3m1!1s0x959f8661a829c483:0xa8f6f5460f65076"</a>
								<dl>
									<dt>Verdier Landscape Design<br>
										Av. Gral. Rivera 6329<br>
										11500, Montevideo, Uruguay
									</dt>
									<dd><span>Telephone:</span>+598 26042489</dd>
									<dd>E-mail: <a class="link-1">info@verdierdesign.com</a></dd>
								</dl>
							</address>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<h2>Contact Form</h2>		<br><br>

					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="phone">
							<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">clear</a>
								<a href="#" data-type="submit" class="btn">send</a>
							</div>
						</div>
					</form>
				</div>
			</div></div>
		</div>
		<br><br>		
		<br><br>

<!--==============================footer=================================-->
	<!-- Include de FOOTER -->
		<?php include('footer.php'); ?>
	</body>
</html>