<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>M &amp; J</title><link rel="shortcut icon" href="images/heart.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
<div id="page">
	<?php
        if(!isset($_COOKIE[language])) {
            readfile("./nav-en.php");
        } else {
            readfile("./nav-".$_COOKIE[language].".php");
            if ($_COOKIE[language] == "en") {
            echo '<style type="text/css">
                .en {display: inline;}
                .pt {display: none;}
                .es {display: none;}
                </style>';
            }
            elseif ($_COOKIE[language] == "es") {
            echo '<style type="text/css">
                .es {display: inline;}
                .pt {display: none;}
                .en {display: none;}
                </style>';
            }
            else {
                echo '<style type="text/css">
                .es {display: none;}
                .pt {display: inline;}
                .en {display: none;}
                </style>';
            }
        } 
    ?>
	<header id="fh5co-header"  class="fh5co-cover fh5co-cover-sm destinationBanner"  role="banner" style="background-image:url(images/Tropical.jpg);" data-stellar-background-ratio="0.5" >
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>O destino</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
<!--
	<div id="fh5co-couple" class="" style="padding-bottom: 0px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Let's celebrate!</h2>	
				</div>
			</div>
	</div>
        </div>
-->
	
	<div id="fh5co-couple" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2 style="color:gray;">Onde </h2>	
                    <h4><a href="https://www.barcelo.com/en-gb/hotels/mexico/riviera-maya/barcelo-maya-grand-resort/" target="_blank"><u>Barcelo Maya Grand Resort</u></a></h4>
					<h3>Riviera Maya, 77750 Playa del Carmen, Q.R., Mexico</h3>					
				</div>
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<iframe style="max-width: 100%;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3737.371052969518!2d-87.2413536844399!3d20.491009986292195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x47f210c129d5bd21!2sBarcel%C3%B2+Maya+Mexico!5e0!3m2!1sen!2sca!4v1501205782307" width=150% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
	</div>
	
	<div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2  id="thingsToDo">Coisas para fazer</h2>
					<p>Veja tudo o que o resort tem para oferecer em:</p>
					<h4><a href="http://unofficial-barcelo-maya.com/" target="_blank"><u>http://unofficial-barcelo-maya.com/</u></a></h4>
					<p></p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
				</div>

				<div class="col-md-12 animate-box text-center">
					<div class="fh5co-video fh5co-bg " style="background-image: url(images/img_bg_3.jpg); ">


						<div class="overlay" >
							<iframe  width="100%" height="100%" src="https://www.youtube.com/embed/xVw8hT5n2Js?rel=0" frameborder="0" allowfullscreen style="height:100%;"></iframe>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
	<?php include "php/footer-pt.inc.php"; ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>
	
	<script>
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
		document.getElementById("date").innerHTML = "&copy; " + y + " mariandjorge.com";
	</script>
</div>
	</body>
</html>

