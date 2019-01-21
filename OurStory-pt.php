﻿<!DOCTYPE html>
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


	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/History.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Nossa história</h1>
							<!-- <h2>Free HTML5 templates Made by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></h2> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

<!--
	<div id="fh5co-couple" class="fh5co-section-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<p>Learn about our journey</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/jorge.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3></br></h3>
						<p><h3>Jorge Castano</h3></p>
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
					</div>
<!--
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/marina.jpg" alt="bride" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3></br></h3>
						<p><h3>Marina Connors</h3></p>
-->
						<!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
<!--
					</div>
				</div>
			</div>
		</div>
	</div>
-->


	<div id="fh5co-couple-story">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
<!-- 					<h2>Our Story</h2> -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Um tijolo de cada vez</h2>
					<p>Da América Latina ao Canadá. Nossa jornada foi longa, mas finalmente nos encontramos.
</p>
				</div>
			</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline animate-box">
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/twosparks.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Amor em segunda vista</h3>
									<span class="date">Agosto 12, 2011</span>
								</div>
								<div class="timeline-body">
									<p>Nosso amor compartilhado pela cultura latina e incrível grupo de amigos nos reuniu quando moramos em Ottawa. Embora nos conhecêssemos há cerca de um ano, perdemos o contato. Nós nos reconectamos em uma festa e conversamos até o sol surgir.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/sparks.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Primeira saida</h3>
									<span class="date">Agosto 2011</span>
								</div>
								<div class="timeline-body">
									<p>Foi uma noite de verão bonita e quente, em Ottawa, comemos comida libanesa deliciosa no pátio da rua Sparks e fomos a salsa dançando no Le Petit Chicago</p>
								</div>
							</div>
						</li>
						<li class="animate-box">
							<div class="timeline-badge" style="background-image:url(images/firstphoto.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Em um relacionamento</h3>
									<span class="date">Setembro 2011</span>
								</div>
								<div class="timeline-body">
									<p>Fizemos oficial, não demorou muito, pois era óbvio que queríamos estar juntos.<br><br></p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/collageengagement.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">nos movemos juntos</h3>
									<span class="date">Novembro 2011</span>
								</div>
								<div class="timeline-body">
									<p>Isso também não demorou porque amamos cada segundo que passamos juntos. Quando você sabe, você sabe!</p>
								</div>
							</div>
						</li>
						<li class=" animate-box">
							<div class="timeline-badge" style="background-image:url(images/collageengagement.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Cometido</h3>
									<span class="date">Agosto 05, 2016</span>
								</div>
								<div class="timeline-body">
									<p>No último dia da nossa viagem à Colômbia, levamos um barco de Cartagena para um arquipélago nas proximidades chamado Islas del Rosario. Jorge está de joelhos e comeu suor enquanto espera por Marina, entre lágrimas de felicidade, diga "Sim!". Champanhe, areia quente e o oceano azul recebem nosso novo compromisso um com o outro.</p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge" style="background-image:url(images/huppa.jpg);"></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Nosso casamento</h3>
									<span class="date">Maio 10, 2017</span>
								</div>
								<div class="timeline-body">
									<p>Nós diremos "Sim!", Cercado por nossa família maravilhosa e queridos amigos!</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>

	<!--<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">-->
		<!-- <div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Are You Attending?</h2>
					<p>Please Fill-up the form to notify you that you're attending. Thanks.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-10 col-md-offset-1">
					<form class="form-inline">
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="name" class="sr-only">Name</label>
								<input type="name" class="form-control" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<button type="submit" class="btn btn-default btn-block">I am Attending</button>
						</div>
					</form>
				</div>
			</div>
		</div> -->
	<!--</div>-->

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
	</body>
</html>
