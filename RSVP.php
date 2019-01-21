<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
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
  

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm destinationBanner" role="banner" style="background-image:url(images/joinus.jpg); background-position-x: 60% !important;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1 >R.S.V.P</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-couple" class="fh5co-section-gray">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<p>We cannot wait to celebrate our special day with you! In order to secure your spot, please complete the booking form below.
                      <br />Key Information:
                        <ol class="list-styled">
                            <li>A deposit of $150 CAD/person is required at tme of booking.</li>
                            <li>Final date payment date is February 23, 2018.</li>
                            <li>Your passport must be valid for six months beyond the travel date.</li>
                        </ol>
</p>	
				</div>
			</div>
	</div>
	
	<div>
	<?php
		echo "<iframe src='https://tieronetravel.wufoo.eu/forms/qbwrxsq1tqnpaw/'  width='100%' height='5500px' frameborder='0' ><p> 
			  <a href='https://tieronetravel.wufoo.eu/forms/qbwrxsq1tqnpaw/'>
    			Fallback link for browsers that don't support iframes
  				</a></p>
		</iframe>";
	?>
		  	
	</div>
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
								<small class="block" ><span id="date"></span>. All Rights Reserved.</small> 

					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
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
	</body>
</html>

