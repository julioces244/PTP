<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Programa Talento Pisco</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM

	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap
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

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">

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
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
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

	<div class="qbootstrap-loader"></div>

	<div id="page">
		<nav class="qbootstrap-nav" role="navigation">
			<div class="top-menu" >



				<div class="container">
					<div class="row" >
						<div class="col-xs-12">
							<div class="top">
								<div class="row">
									<div class="col-md-4 col-md-push-4 text-center">

									</div>
									<div class="col-md-4 col-md-pull-4">
										<img class="imglogo1" src="./images/TalentoPiscoLogo.png" height="150px" width="500px">

										<div class="num">
										</div>
									</div>
									<div class="col-md-4">

										<img class="imglogo2" src="./images/LogosPTP/logocamisea.jpg" height="150px" width="400px">

									</div>
								</div>
							</div>
						</div>
					</div>
					</div>



					<div class="row" id="navbar" style="border-color: red">
						<div class="col-xs-12 text-center" >
							<div class="menu-1">
								<ul>
									<li><a class="letter" href="{{ url('index')}}">Inicio</a></li>
									<li><a class="letter" href="{{ url('bienvenido')}}">Bienvenido</a></li>

									<li class="btn-cta has-dropdown">
										<a class="letter" href="{{ url('talentopisco')}}">Talento Pisco</a>
										<ul class="dropdown">
											<li><a href="{{ url('talentopisco')}}">Programa Talento Pisco</a></li>
											<li><a href="{{ url('pisco_aprendizaje')}}">Pisco Aprendizaje</a></li>
											<li><a href="{{ url('pisco_digital')}}">Pisco Digital</a></li>
											<li><a href="{{ url('pisco_tecnologia')}}">Pisco Tecnología</a></li>
										</ul>
									</li>

									<li>
										<a class="letter" href="{{ url('excelencia_formativa')}}">Excelencia Formativa</a>
									</li>


									<li class="btn-cta has-dropdown">
										<a class="letter" href="{{ url('oportunidades_empleo')}}">Oportunidades</a>
										<ul class="dropdown">
											<li><a href="{{url('innovacion')}}">Valor Pisco</a></li>
											<li><a href="{{ url('oportunidades_empleo')}}">Empleo</a></li>
										</ul>
									</li>


									<li class="btn-cta has-dropdown">
										<a class="letter" href="{{ url('summer_tech')}}">Comunidad</a>
										<ul class="dropdown">
											<li><a href="{{url('summer_tech')}}">Summer Camp Tech</a></li>
										</ul>
									</li>


									<li><a class="letter" href="{{ url('noticias')}}">Noticias</a></li>

									<li class="letter active"><a href="{{ url('contacto')}}">Contacto</a></li>

									<li class="btn-cta has-dropdown">
										<a class="letter" href="{{ url('blockstudent')}}">Acceder</a>
										<ul class="dropdown">
											<li><a href="{{ url('blockstudent')}}">Estudiante</a></li>
											<li><a href="{{ url('blockparent')}}">Padres</a></li>
											<li><a href="{{ url('blockteacher')}}">Docentes</a></li>
											<li><a href="{{ url('login')}}">Camisea</a></li>
											<li><a href="{{ url('blockfund')}}">Fondo Talento Pisco</a></li>
										</ul>
									</li>
									<!--
									<li class="btn-cta has-dropdown">
										<a href="#"><span>Ingresar <i class="icon-calendar3"></i></span></a>
										<ul class="dropdown">
											<li><a href="{{ url('login')}}">PlusPetrol</a></li>
											<li><a href="#">GORI</a></li>
											<li><a href="#">Alumnos</a></li>
											<li><a href="#">Padres</a></li>
											<li><a href="#">Profesores</a></li>
										</ul>
									</li>-->
								</ul>
							</div>
						</div>
					</div>

			</div>
		</nav>

		<aside id="qbootstrap-hero">
			<div class="flexslider">
				<ul class="slides" style="vertical-align:middle;">
					<li style="background-image: url(images/bg_talento_pisco.jpg);">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">

										<img src="images/LogosPTP/pisco_tal.png">
										<h1 class="doc-holder"><strong>Mejorando la calidad en la educación peruana</strong></h1>
										<!--
										<h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
										<p><a class="btn btn-primary btn-lg" href="appointment.html">Make an Appointment</a></p>-->
									</div>
								</div>
							</div>
						</div>
					</li>

					<li style="background-image: url(images/bg_pisco_aprendizaje.jpg);">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">

										<img src="images/LogosPTP/Pisco_apr.png">

										<!--
										<h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
										<p><a class="btn btn-primary btn-lg" href="appointment.html">Make an Appointment</a></p>-->
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg_pisco_digital.jpg);">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">

										<img src="images/LogosPTP/Pisco_dig.png">

											<!--
										<h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
										<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p>-->
									</div>
								</div>
							</div>
						</div>
					</li>

					<li style="background-image: url(images/bg_pisco_tecnologia.jpg);">
						<div class="overlay"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center slider-text">
									<div class="slider-text-inner">

										<img src="images/LogosPTP/Pisco_tec.png">

											<!--
										<h2>Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
										<p><a class="btn btn-primary btn-lg btn-learn" href="appointment.html">Make an Appointment</a></p>-->
									</div>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
		</aside>

	<div id="qbootstrap-intro">
		<div class="row">
			<div class="intro animate-box">
				<div class="intro-grid color-1">
					<span class="icon"><i class="icon-calendar3"></i></span>
					<h3>Pisco Aprendizaje</h3>
					<p>Programa estudiantil diseñado para alumnos de 1er y 2do grado de secundaria de los colegios en Pisco.</p>
					<a href="departments-single.html" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-2">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<h3>Pisco Digital</h3>
					<p>Programa estudiantil diseñado para alumnos de 3er grado de secundaria de los colegios en Pisco.</p>
					<a href="#" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-3">
					<span class="icon"><i class="icon-clock3"></i></span>
					<h3>Pisco Tecnología</h3>
					<p>
						Programa estudiantil diseñado para alumnos de 3er grado de secundaria de los colegios en Pisco.
						<!--
						<span>Monday – Friday: 08.00 am – 06.00 pm</span><br>
						<span>Saturday – Sunday: 08.00 am – 04.00 pm</span><br>
						<span>Sunday: 08.00 am – 02.00 pm</span>-->
					</p>
					<a href="#" class="btn btn-primary">Leer más</a>
				</div>
			</div>
		</div>
	</div>


	<div id="qbootstrap-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h3>Información de Contacto</h3>
					<div class="row contact-info-wrap">
						<div class="col-md-3">
							<p><span><i class="icon-location"></i></span> Alipio Ponce 372, 374, Pisco, Ica - Perú <br>  </p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-phone"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
						</div>
						<div class="col-md-3">
							<p><span><i class="icon-mail"></i></span> <a href="mailto:info@yoursite.com">talentopisco@competitividadccd.com</a></p>
						</div>
						<!--
						<div class="col-md-3">
							<p><span><i class="icon-globe-outline"></i></span> <a href="https://qbootstrap.com/">QBootstrap.com</a></p>
						</div>-->
					</div>
				</div>
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h3>Contáctanos</h3>
					<form action="#">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">Nombre</label>
								<input type="text" id="fname" class="form-control" placeholder="Ingrese su nombre">
							</div>
							<div class="col-md-6">
								<label for="lname">Apellido</label>
								<input type="text" id="lname" class="form-control" placeholder="Ingrese su apellido">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Correo</label>
								<input type="text" id="email" class="form-control" placeholder="Ingrese su correo">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Asunto</label>
								<input type="text" id="subject" class="form-control" placeholder="Ingrese el asunto">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escribir mensaje aquí..."></textarea>
							</div>
						</div>
						<div class="form-group text-center">
							<input type="submit" value="Enviar Mensaje" class="btn btn-primary">
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

<!--
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9958621234778!2d-76.99139458457466!3d-12.112435346424968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7ec9124d10b%3A0x2a27a88a61ba5adb!2sAv.+del+Pinar+124%2C+Lima+15038!5e0!3m2!1ses-419!2spe!4v1564774304949!5m2!1ses-419!2spe" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.1577984120827!2d-76.20859088455606!3d-13.708890978772068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91106f61e25209af%3A0x62521b6483a676ac!2sAlipio%20Ponce%20376%2C%20Pisco%2011601!5e0!3m2!1ses!2spe!4v1568745278243!5m2!1ses!2spe" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

	<!--
	<div id="qbootstrap-register" style="background-image: url(images/bg_student4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
						<h2>Somos <strong class="color">Programa Talento Pisco!</strong></h2>

						<h3>By Dr. <strong>Mary Smith</strong></h3>-->
						<!--
						<p class="countdown">
							<span id="days"></span>
							<span id="hours"></span>
							<span id="minutes"></span>
							<span id="seconds"></span>
						</p>
						<p><strong>Forma parte del gran cambio!</strong></p>
						<p><a href="#" class="btn btn-primary btn-lg">Aceptar <i class="icon-calendar3"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">

				<div class="col-md-1 qbootstrap-widget">
					<center><img src="images/socialnetworks/ic_facebook.png" alt="" height=50px width=50px></center>

				<a><br></a>
				  <center><img src="images/socialnetworks/ic_twitter.png" alt=""></center>

				<a><br></a>
				<center><img src="images/socialnetworks/ic_instagram.png" alt="" height=53px width=53px></center>

				<a><br></a>
				<center><img src="images/socialnetworks/ic_youtube.png" alt="" height=50px width=50px></center>
				</div>

				<div class="col-md-3 qbootstrap-widget">
					<h3>Sobre Talento Pisco</h3>
					<p>Es un programa de Camisea que busca mejorar la educación secundaria de los
						estudiantes de esta provincia de Ica.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Enlaces</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="{{ url('index')}}">Inicio</a></li>
						<li><a href="{{ url('bienvenido')}}">Bienvenido</a></li>
						<li><a href="{{ url('talentopisco')}}">Talento Pisco</a></li>
						<li><a href="{{ url('excelencia_formativa')}}">Excelencia Formativa</a></li>
						<li><a href="{{ url('oportunidades_empleo')}}">Oportunidad de Empleo</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 qbootstrap-widget">
					<h3>Proyectos Sociales</h3>
					<ul class="qbootstrap-footer-links">
						<li><a href="{{ url('pisco_aprendizaje')}}">Pisco Aprendizaje</a></li>
						<li><a href="{{ url('pisco_digital')}}">Pisco Digital</a></li>
						<li><a href="{{ url('pisco_tecnologia')}}">Pisco Tecnología</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 qbootstrap-widget">
					<h3>Escríbenos</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Nombre</label>
							<input type="name" class="form-control" id="name" placeholder="Nombre">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Correo</label>
							<input type="email" class="form-control" id="email" placeholder="Correo">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Mensaje</label>
							<textarea class="form-control" id="message" rows="3" placeholder="Mensaje"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2017 Free HTML5. All Rights Reserved.</small>

                    <small class="block">Designed by <a href="https://qbootstrap.com/" target="_blank">QBootstrap.com</a> Avaiable on <a href="https://themefisher.com/free-bootstrap-templates" class="">Themefisher.com</a></small>

                </p>
			</div>
		</div>-->
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
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script type="text/javascript">
		// When the user scrolls the page, execute myFunction
		window.onscroll = function() {myFunction()};

		// Get the navbar
		var navbar = document.getElementById("navbar");

		// Get the offset position of the navbar
		var sticky = navbar.offsetTop;

		// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky")

		  } else {
		    navbar.classList.remove("sticky");
		  }
		}
	</script>

	</body>
</html>
