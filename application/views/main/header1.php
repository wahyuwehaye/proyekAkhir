<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BootZard - Bootstrap Wizard Template</title>

        <!-- This is what you need -->
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

    <script src="<?php echo base_url()?>sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sweetalert/dist/sweetalert.css">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url()?>wizard/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>wizard/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>wizard/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>wizard/css/style.css">

        <link rel="shortcut icon" href="<?php echo base_url()?>wizard/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>wizard/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>wizard/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>wizard/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>wizard/ico/apple-touch-icon-57-precomposed.png">

        <meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/summer.png" type="image/png" />
    	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

    	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/reset.css"> <!-- CSS reset -->
    	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/modals.css"> <!-- Gem style -->
    	<script src="<?php echo base_url()?>assets/js/modernizr1.js"></script> <!-- Modernizr -->

    	<title>Hotel Cihampelas 2 Bandung</title>

    	<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.11.0.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo base_url()?>assets/css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- daterange picker -->
      <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="<?php echo base_url()?>assets/datepicker/css/bootstrap-datepicker3.css"/>
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/daterangepicker/daterangepicker.css">
      <!-- bootstrap datepicker -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/datepicker/datepicker3.css">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/iCheck/all.css">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/colorpicker/bootstrap-colorpicker.min.css">
      <!-- Bootstrap time Picker -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/timepicker/bootstrap-timepicker.min.css">
      <!-- Select2 -->
      <link rel="stylesheet" href="<?php echo base_url()?>plugins/select2/select2.min.css">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
    <!--google fonts-->
<!-- upload foto -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dropzone.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/basic.min.css') ?>">

<script type="text/javascript" src="<?php echo base_url('assets/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/dropzone.min.js') ?>"></script>

<style type="text/css">

body{
    background-color: #E8E9EC;
}

.dropzone {
    margin-top: 100px;
    border: 2px dashed #0087F7;
}

</style>

<!-- end upload foto -->

    <!-- animated-css -->
    		<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    		<script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
    		<script>
    		 new WOW().init();
    		</script>
    <!-- animated-css -->
    <script src="<?php echo base_url()?>assets/js/modernizr.js"></script>
    <script>
        $(document).ready(function(){
            if (Modernizr.touch) {
                // show the close overlay button
                $(".close-overlay").removeClass("hidden");
                // handle the adding of hover class when clicked
                $(".branch-gd").click(function(e){
                    if (!$(this).hasClass("hover")) {
                        $(this).addClass("hover");
                    }
                });
                // handle the closing of the overlay
                $(".close-overlay").click(function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    if ($(this).closest(".branch-gd").hasClass("hover")) {
                        $(this).closest(".branch-gd").removeClass("hover");
                    }
                });
            } else {
                // handle the mouseenter functionality
                $(".branch-gd").mouseenter(function(){
                    $(this).addClass("hover");
                })
                // handle the mouseleave functionality
                .mouseleave(function(){
                    $(this).removeClass("hover");
                });
            }
        });
    </script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    </head>

    <body>
        <header role="banner">

            <!--header-top start here-->
        <div class="top-header">
        <div class="container">
            <div class="top-header-main">
                <div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
                    <ul>
                        <li><h5>Follow Us :</h5></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="tw"> </span></a></li>
                        <li><a href="#"><span class="in"> </span></a></li>
                        <li><a href="#"><span class="gmail"> </span></a></li>
                    </ul>
                </div>
                <div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
                    <ul>
                        <li><span class="phone"> </span> <h6>+62 22 2039 555 </h6></li>
                        <li><span class="email"> </span><h6><a href="mailto:info@example.com">cihampelashotel@gmail.com</a></h6></li>
                    </ul>
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        </div>
        <!--header-top end here-->
        
        </header>
