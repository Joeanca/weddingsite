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
	
     <!-- Owl Carousel  -->
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- photoSwipe  -->
    <link rel="stylesheet" href="css/default-skin.css">
    <link rel="stylesheet" href="css/photoswipe.css">


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
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm destinationBanner" role="banner" style="background-image:url(images/collage.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Nossas Fotos</h1>
							<h2>Encontre aqui nossos momentos especiais</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<span>Nossas memórias</span>
					<h2>Galeria do casamento</h2>
					<p>Encontre os muitos momentos capturados e classificados por ocasião. Depois do casamento e da lua de mel, vamos publicar as fotos aqui</p>
				</div>
			</div>
			<div class="row row-bottom-padded-md ">
				<div class="col-md-12" >
					<ul id="fh5co-gallery-list" > 
                        <!--1 -->
                        <li class="one-third animate-box my-gallery engagementPhotos" data-animate-effect="fadeIn">
                            <figure>
                                <a href="images/canada.jpg" class="color-2" data-size="320x480" style="background: url(images/canada.jpg) no-repeat center center border-box; background-size:cover">
                                    <div class="case-studies-summary">
                                        <span class="engagementPhotosCount"></span><span> Fotos</span>                                        
                                        <h2>Nosso Compromisso</h2>
                                    </div>
                                    <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                </a>
                            </figure>
                        </li>
                        <!--2 -->
					    <li  class="one-third animate-box my-gallery engagementPartyPhotos" data-animate-effect="fadeIn" >
                                <figure>
                                    <a href="engagementParty/189_2.jpg" class="color-2" data-size="320x480"  style="background: url(engagementParty/189_2.jpg) no-repeat center center border-box; background-size:cover" >
                                        <div class="case-studies-summary">
                                            <span class="engagementPartyPhotoCount"></span><span> Fotos</span>                                       
                                            <h2>Nossa festa de noivado</h2>
                                        </div>
                                        <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                    </a>
                                </figure>
					      </li>
                          <!--3 -->
                          <li class="one-third animate-box my-gallery engagementPhotos" data-animate-effect="fadeIn">
                                <figure>
                                    <a href="engagementParty/189_2.jpg" class="color-2" data-size="320x480" style="background: url(images/firstphoto.jpg) no-repeat center center border-box; background-size:cover">
                                        <div class="case-studies-summary">
                                            <span>0 Fotos</span>
                                            <h2>Nosso compromisso</h2>
                                        </div>
                                        <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                    </a>
                                </figure>
                            </li>
                           <!--4 -->
                           <li class="one-third animate-box my-gallery engagementPhotos" data-animate-effect="fadeIn">
                                <figure>
                                    <a href="engagementParty/189_2.jpg" class="color-2" data-size="320x480" style="background: url(images/collage.jpg) no-repeat center center border-box; background-size:cover">
                                        <div class="case-studies-summary">
                                            <span>0 Fotos</span>
                                            <h2>Nosso compromisso</h2>
                                        </div>
                                        <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                    </a>
                                </figure>
                            </li>
                           <!-- 5 -->
                            <li class="one-third animate-box my-gallery engagementPhotos" data-animate-effect="fadeIn">
                                <figure>
                                    <a href="engagementParty/189_2.jpg" class="color-2" data-size="320x480" style="background: url(images/cover.jpg) no-repeat center center border-box; background-size:cover">
                                        <div class="case-studies-summary">
                                            <span>0 Fotos</span>
                                            <h2>Nosso compromissot</h2>
                                        </div>
                                        <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                    </a>
                                </figure>
                            </li>
                            <!-- 6 -->
                            <li class="one-third animate-box my-gallery engagementPhotos" data-animate-effect="fadeIn">
                                <figure>
                                    <a href="engagementParty/189_2.jpg" class="color-2" data-size="320x480" style="background: url(images/huppa.jpg) no-repeat center center border-box; background-size:cover">
                                        <div class="case-studies-summary">
                                            <span>0 Fotos</span>
                                            <h2>Nosso compromisso</h2>
                                        </div>
                                        <img src="engagementParty/189_2.jpg" alt="Image description" style="width:320px; height:480px; display:none;">

                                    </a>
                                </figure>
                            </li>
                    </ul>		
				</div>
			</div>
		</div>
	
	</div>
	<?php include "php/footer-pt.inc.php"; ?>
    
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
    <!-- Photoswipe -->
    <script src="js/photoswipe.min.js"></script>
    <script src="js/photoswipe-ui-default.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

      



  	<script>
		n =  new Date();
		y = n.getFullYear();
		m = n.getMonth() + 1;
		d = n.getDate();
		document.getElementById("date").innerHTML = "&copy; " + y + " mariandjorge.com";

        var engagementPartyPhotoCount;
      
	</script>
        <script language="javascript">
         $.ajax({
            url: "engagement.php",
            type: "POST",
            success: function (msg) {
                document.querySelector('.engagementPhotosCount').innerHTML = msg.images.length;
                pictures = msg.images;
                sizes = msg.sizes;
                htmlRaw = msg.htmls;
                var engagementIndex = 0;
                for (index = 0; engagementIndex < pictures.length; ++engagementIndex) {
                     $('.engagementPhotos').append(htmlRaw[engagementIndex]);
                };

            },
            dataType: "json",
            fail: function () { console.log("failed to get images"); }
            });

            $.ajax({
                url: "engagementParty.php",
                type: "POST",
                success: function (msg) {
                    document.querySelector('.engagementPartyPhotoCount').innerHTML = msg.images.length;
                    pictures = msg.images;
                    sizes = msg.sizes;
                    htmlRaw = msg.htmls;
                    var engagementIndex = 0;
                    for (index = 0; engagementIndex < pictures.length; ++engagementIndex) {
                         $('.engagementPartyPhotos').append(htmlRaw[engagementIndex]);
                    };

                },
                dataType: "json",
                fail: function () { console.log("failed to get images"); }
            });


        //FOR PHOTOSWIPE
        var initPhotoSwipeFromDOM = function (gallerySelector) {

            // parse slide data (url, title, size ...) from DOM elements
            // (children of gallerySelector)
            var parseThumbnailElements = function (el) {
                var thumbElements = el.childNodes,
                    numNodes = thumbElements.length,
                    items = [],
                    figureEl,
                    linkEl,
                    size,
                    item;

                for (var i = 0; i < numNodes; i++) {

                    figureEl = thumbElements[i]; // <figure> element

                    // include only element nodes
                    if (figureEl.nodeType !== 1) {
                        continue;
                    }

                    linkEl = figureEl.children[0]; // <a> element

                    size = linkEl.getAttribute('data-size').split('x');

                    // create slide object
                    item = {
                        src: linkEl.getAttribute('href'),
                        w: parseInt(size[0], 10),
                        h: parseInt(size[1], 10)
                    };



                    if (figureEl.children.length > 1) {
                        // <figcaption> content
                        item.title = figureEl.children[1].innerHTML;
                    }

                    if (linkEl.children.length > 0) {
                        // <img> thumbnail element, retrieving thumbnail url
                        item.msrc = linkEl.children[0].getAttribute('src');
                    }

                    item.el = figureEl; // save link to element for getThumbBoundsFn
                    items.push(item);
                }

                return items;
            };

            // find nearest parent element
            var closest = function closest(el, fn) {
                return el && (fn(el) ? el : closest(el.parentNode, fn));
            };

            // triggers when user clicks on thumbnail
            var onThumbnailsClick = function (e) {
                e = e || window.event;
                e.preventDefault ? e.preventDefault() : e.returnValue = false;

                var eTarget = e.target || e.srcElement;

                // find root element of slide
                var clickedListItem = closest(eTarget, function (el) {
                    return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                });

                if (!clickedListItem) {
                    return;
                }

                // find index of clicked item by looping through all child nodes
                // alternatively, you may define index via data- attribute
                var clickedGallery = clickedListItem.parentNode,
                    childNodes = clickedListItem.parentNode.childNodes,
                    numChildNodes = childNodes.length,
                    nodeIndex = 0,
                    index;

                for (var i = 0; i < numChildNodes; i++) {
                    if (childNodes[i].nodeType !== 1) {
                        continue;
                    }

                    if (childNodes[i] === clickedListItem) {
                        index = nodeIndex;
                        break;
                    }
                    nodeIndex++;
                }



                if (index >= 0) {
                    // open PhotoSwipe if valid index found
                    openPhotoSwipe(index, clickedGallery);
                }
                return false;
            };

            // parse picture index and gallery index from URL (#&pid=1&gid=2)
            var photoswipeParseHash = function () {
                var hash = window.location.hash.substring(1),
                    params = {};

                if (hash.length < 5) {
                    return params;
                }

                var vars = hash.split('&');
                for (var i = 0; i < vars.length; i++) {
                    if (!vars[i]) {
                        continue;
                    }
                    var pair = vars[i].split('=');
                    if (pair.length < 2) {
                        continue;
                    }
                    params[pair[0]] = pair[1];
                }

                if (params.gid) {
                    params.gid = parseInt(params.gid, 10);
                }

                return params;
            };

            var openPhotoSwipe = function (index, galleryElement, disableAnimation, fromURL) {
                var pswpElement = document.querySelectorAll('.pswp')[0],
                    gallery,
                    options,
                    items;

                items = parseThumbnailElements(galleryElement);

                // define options (if needed)
                options = {

                    // define gallery index (for URL)
                    galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                    //getThumbBoundsFn: function (index) {
                    //    // See Options -> getThumbBoundsFn section of documentation for more info
                    //    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                    //        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    //        rect = thumbnail.getBoundingClientRect();

                    //    return { x: rect.left, y: rect.top + pageYScroll, w: rect.width };
                    //}

                };

                // PhotoSwipe opened from URL
                if (fromURL) {
                    if (options.galleryPIDs) {
                        // parse real index when custom PIDs are used
                        // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                        for (var j = 0; j < items.length; j++) {
                            if (items[j].pid == index) {
                                options.index = j;
                                break;
                            }
                        }
                    } else {
                        // in URL indexes start from 1
                        options.index = parseInt(index, 10) - 1;
                    }
                } else {
                    options.index = parseInt(index, 10);
                }

                // exit if index not found
                if (isNaN(options.index)) {
                    return;
                }

                if (disableAnimation) {
                    options.showAnimationDuration = 0;
                }

                // Pass data to PhotoSwipe and initialize it
                gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                gallery.init();
            };

            // loop through all gallery elements and bind events
            var galleryElements = document.querySelectorAll(gallerySelector);

            for (var i = 0, l = galleryElements.length; i < l; i++) {
                galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                galleryElements[i].onclick = onThumbnailsClick;
            }

            // Parse URL and open gallery if it contains #&pid=3&gid=1
            var hashData = photoswipeParseHash();
            //if (hashData.pid && hashData.gid) {
            //    openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
            //}
        };

        // execute above function
        initPhotoSwipeFromDOM('.my-gallery');





        </script>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <!-- Background of PhotoSwipe.
             It's a separate element as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>
            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">
                <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>

