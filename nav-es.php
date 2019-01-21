<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
                    <div id="fh5co-logo"><a href="home-es.php"><div id="logo-container"><span id="logo-span" style="width:4em;">m<img id="heart" class="animate-box" src="images/heart.jpg" alt="heart">j<strong>.</strong></span></div></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="home-es.php" class="es" lang="es">Principal</a></li>
						<li><a href="OurStory-es.php">Nuestra jornada</a></li>
                        <li><a href="Gallery-es.php">Fotos</a></li>
					    <li><a href="Destination-es.php">Sitio</a></li>

                        <li class="has-dropdown">
							<a href="Schedule-es.php">Horario</a>
							<ul class="dropdown">
								<li><a href="Schedule-es.php#day1" onclick="$.scrollTo($('#myDiv'), 1000);">Cockteles</a></li>
								<li><a href="Schedule-es.php#day2">La Boda</a></li>
							</ul>
						</li>
						<li><a href="RSVP-es.php">Reservar</a></li>
                        <li><a href="Gifts-es.php">Regalos</a></li>
						<li id="fh5co-logo">
						<span>
							<img id="en" class="animate-box language" src="images/en.png" alt="en" onclick="language(this.id)">
							<img id="pt" class="animate-box language" src="images/pt.png" alt="pt" onclick="language(this.id)">
							<img id="es" class="animate-box language" src="images/es.png" alt="es" onclick="language(this.id)">
						</span>	
						</li>
	        	</ul>
			</div>
		</div>
			
	</div>
</nav>
<script>
	function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length,c.length);
				}
			}
			return "";
		}
		function language(lang){
            if (lang == "es"){
                setLang("es");
            } else if (lang== "pt"){
				setLang("pt");
			} else if (lang == "en"){
				// $(".es").css({'display':'none'});
				// $(".pt").css({'display':'none'});
				// $(".en").css({'display':'inline'});
				setLang("en");
            }
			if (lang != "en"){
			var newLang = "-" + lang;}
			else {
			var newLang = "";}
			window.location.href = "home"+newLang+".php";
            //location.reload();		
		}
		function CheckCookies(){  
			var lang = getCookie("language"); 
			setLang(lang);
		}
		function setLang(lang){
			days=365;
			myDate = new Date();
			myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
			document.cookie = 'language=' + lang + '; expires=' + myDate.toGMTString();
		}
		CheckCookies();	
</script>