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
    



<div class="es">
	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/cover.jpg);"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Jorge &amp; Marina</h1>
							<h2>#JorgeMarina2018</h2>
							<div class="simply-countdown simply-countdown-one"></div>							
                            <div title="Añadir al calendario" class="addeventatc ">
							Añadir al calendario
                                <span class="start">05/10/2018 05:00 PM</span>
                                <span class="end">05/10/2087 11:59 AM</span>
                                <span class="timezone">America/Cancun</span>
                                <span class="title">La boda de Jorge y Marina</span>
                                <span class="description">Estamos muy contentos de celebrar nuestra boda<br>Deseamos compartir esta ocasión especial con usted.</span>
                                <span class="location">Carretera Chetumal-Puerto Juárez Km. 266.3, Riviera Maya, 77750 Playa del Carmen, Q.R., Mexico</span>
                                <span class="organizer">Jorge and Marina</span>
                                <span class="all_day_event">false</span>
                                <span class="date_format">MM/DD/YYYY</span>
                                <span class="client">acNxvBtqjzovwVmbKmiA30027</span>
                            </div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-couple">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Bienvenidos</h2>
					<h3>Mayo 10th, 2018 Mexico</h3>
					<p>Comparta con nosotros nuestra boda</p>
				</div>
			</div>
			<div class="couple-wrap animate-box">
				<div class="couple-half">
					<div class="groom">
						<img src="images/jorge.jpg" alt="groom" class="img-responsive">
					</div>
					<div class="desc-groom">
						<h3>Jorge Castano</h3>
						<p>Un Colombiano-Canadiense quien se enamoro de una increible mujer. </p>
					</div>
				</div>
				<p class="heart text-center"><i class="icon-heart2"></i></p>
				<div class="couple-half">
					<div class="bride">
						<img src="images/marina.jpg" alt="bride" class="img-responsive">
					</div>
					<div class="desc-bride">
						<h3>Marina Connors</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

<!--
	<div id="fh5co-counter" cl"fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
		<div class="overlay"><>
		<div class="container"
			<div class="row">
				<div class="diy-t">
					<div classsplay-tc">
						<div c="col-md-6 col-sm-6 animate-box">
							<dlass="feature-center">
							  pan class="icon">
							    <i class="icon-users"></i>
							  span>

							  pan class="counter js-counter" data-from="0" data-to="180" data-speed="5000" data-refresh-interval="50">1</span>
							  pan class="counter-label">Estimated Guest</span>

							</
						</div>
						<div c="col-md-6 col-sm-6 animate-box">
							<dlass="feature-center">
							  pan class="icon">
							    <i class="icon-user"></i>
							  span>

							  pan class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
							  pan class="counter-label">Countries attending</span>
							</
						</div>
						<!-- <class="col-md-3 col-sm-6 animate-box">
							<dlass="feature-center">
							  pan class="icon">
							    <i class="icon-calendar"></i>
							  span>
							  pan class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
							  pan class="counter-label">Some other stat</span>
							</
						</div>
						<div c="col-md-3 col-sm-6 animate-box">
							<dlass="feature-center">
							  pan class="icon">
							    <i class="icon-clock"></i>
							  span>

							  pan class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
							  pan class="counter-label">Hours Spent</span>

							</
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->

<!--
	<div id="fh5co-testimonial">
		<div class="container">
			<div class="row">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<span>Best Wishes</span>
						<h2>Friends Wishes</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="wrap-testimony">
							<div class="owl-carousel-fullwidth">
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-1.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-2.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide active text-center">
										<figure>
											<img src="images/couple-3.jpg" alt="user">
										</figure>
										<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
										<blockquote>
											<p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
-->

	<!-- <div id="fh5co-services" class="fh5co-section-gray">
		<div class="container">
			
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>We Offer Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-calendar"></i>
						</span>
						<div class="feature-copy">
							<h3>We Organized Events</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-image"></i>
						</span>
						<div class="feature-copy">
							<h3>Photoshoot</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

					<div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<div class="feature-copy">
							<h3>Video Editing</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						</div>
					</div>

				</div>

				<div class="col-md-6 animate-box">
					<div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
						<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
						<div class="overlay"></div>
					</div>
				</div>
			</div>

			
		</div>
	</div> -->


	<!--<div id="fh5co-started" class="fh5co-bg" style="background-image:url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
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
		</div>
	</div>
-->
<?php include "php/footer-es.inc.php"; ?>

    
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

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="js/simplyCountdown.js"></script>

    <!-- addevent calendar-->
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function() {
			$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false
			});
		});
	</script>
	<script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: 2018,
            month: 05,
            day: 10,
            hour: 1700
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: true
        });
    </script>
    <script>
		// handle links with @href started with '#' only
		$(document).on('click', 'a[href^="#"]', function(e) {
			// target element id
			var id = $(this).attr('href');
			// target element
			var $id = $(id);
			if ($id.length === 0) {
				return;
			}
			// prevent standard hash navigation (avoid blinking in IE)
			e.preventDefault();

			// top position relative to the document
			var pos = $id.offset().top;

			// animated top scrolling
			$('body, html').animate({scrollTop: pos});
		});
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
        document.getElementById("date").innerHTML = "&copy; " + y + " mariandjorge.com";
		
        
    </script>
	</body>
</html>

