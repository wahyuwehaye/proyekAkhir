<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Launching Soon Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Launching Soon Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="<?php echo base_url()?>soon/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->

<script type="text/javascript" src="<?php echo base_url()?>soon/js/jquery-2.1.4.min.js"></script><!-- Supportive-JavaScript -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<body>
<div class="container demo-1">
	<div class="content">
        <div id="large-header" class="large-header">
			<div class="w3ls-main-title">
				<h1>Launching Soon Widget</h1>
					<div class="demo2"></div>
					<!--newsletter-->
					<div class="w3layouts-newsletter">
						<h2>Subscribe! We will let you know once it is available</h2>
						  <form action="<?php echo base_url()?>" method="post">
							<input type="submit" value="Back to Home" />
							<div class="clear"></div>
						  </form>
					</div>
					<!--//newsletter -->
					<!-- copyright -->
					<p class="agile-copyright">© 2017 Launching Soon Widget. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
					<!-- //copyright -->
			</div>
            <canvas id="demo-canvas"></canvas>
        </div>
	</div>
</div>
<!-- /main-section -->
<!-- Counter required files -->
	<link rel='stylesheet' href='<?php echo base_url()?>soon/css/dscountdown.css' type='text/css' media='all' />
	<script type="text/javascript" src="<?php echo base_url()?>soon/js/dscountdown.min.js"></script>
	<script>
		jQuery(document).ready(function($){
			$('.demo2').dsCountDown({
				endDate: new Date("December 24, 2020 23:59:00"),
				theme: 'black'
				});
		});
	</script>
<!-- //Counter required files -->
<!-- js files -->
<script src="<?php echo base_url()?>soon/js/rAF.js"></script>
<script src="<?php echo base_url()?>soon/js/demo-2.js"></script>
<!-- /js files -->
</body>
</html>
