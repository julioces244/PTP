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
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="css/justifiedGallery.min.css">
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
										<img class="imglogo1" src="{{asset('images/TalentoPiscoLogo.png')}}" height="150px" width="500px">

										<div class="num">
										</div>
									</div>
									<div class="col-md-4">

										<img class="imglogo2" src="{{asset('images/LogosPTP/logocamisea.jpg')}}" height="150px" width="400px">

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
									<li><a href="{{ url('index')}}">Inicio</a></li>
									<li><a href="{{ url('bienvenido')}}">Bienvenido</a></li>

									<li class="btn-cta has-dropdown active">
										<a href="{{ url('talentopisco')}}">Talento Pisco</a>
										<ul class="dropdown">
											<li><a href="{{ url('talentopisco')}}">Programa Talento Pisco</a></li>
											<li><a href="{{ url('pisco_aprendizaje')}}">Pisco Aprendizaje</a></li>
											<li><a href="{{ url('pisco_digital')}}">Pisco Digital</a></li>
											<li><a href="{{ url('pisco_tecnologia')}}">Pisco Tecnología</a></li>
										</ul>
									</li>

									<li>
										<a href="{{ url('excelencia_formativa')}}">Excelencia Formativa</a>
									</li>


									<li class="btn-cta has-dropdown">
										<a href="{{ url('oportunidades_empleo')}}">Oportunidades</a>
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


									<li><a href="{{ url('noticias')}}">Noticias</a></li>

									<li><a href="{{ url('contacto')}}">Contacto</a></li>

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
					<span class="icon"><i class="icon-wallet2"></i></span>
					<h3>Pisco Aprendizaje</h3>
					<p>Mejora de logros de Aprendizaje para estudiantes de 1ro y 2do de Educación Secundaria.</p>
					<a href="{{ url('pisco_aprendizaje')}}" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-2">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<h3>Pisco Digital</h3>
					<p>Educación Digital para estudiantes de 3ro grado de secundaria con certificación reconocida.</p>
					<a href="{{ url('pisco_digital')}}" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-3">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<h3>Pisco Tecnología</h3>
					<p>
						Educación para el Trabajo Técnico Escolar para los alumnos del 4to y 5to de secundaria con certificación reconocida.
					</p>
					<a href="{{ url('pisco_tecnologia')}}" class="btn btn-primary">Leer más</a>
				</div>
			</div>
		</div>
	</div>



	<div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 wow fadeInLeft">
                        <div class="author-thumb text-center">
                            <img src="images/empresario5.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInRight">
                        <div class="about-intro">
                            <h3>PISCO TECNOLOGIA</h3>
                            <h5>Educación para el Trabajo Técnico Escolar para los alumnos del 4to y 5to de secundaria con certificación reconocida.</h5>
                            <span class="divider"></span>
                            <p>El proyecto busca desarrollar habilidades adecuadas en tecnología (electricidad, electrónica y computación) y certificar a los docentes y estudiantes del 4to y 5to grado de secundaria de la provincia de Pisco. Para lograr los objetivos, la institución Centro tecnológico Minero (CETEMIN) capacita a los docentes en electricidad y electrónica y la Universidad Nacional de Ingeniería (UNI) capacita a los docentes en computación avanzada (Excel avanzado y desarrollo de páginas web).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="qbootstrap-doctor" style="padding-bottom: -300px;" class="qbootstrap-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 image-content">
					<div class="doctor animate-box">

						<h2><a>EDUCACIÓN PARA EL TRABAJO</a></h2>
						<br>

						<div class="desc">
							<p>Las 12 II.EE que son beneficiarias del proyecto serán equipadas con laboratorios de cómputo, electricidad o electrónica dependiendo de las capacidades
								 y habilidades de los docentes que actualmente enseñen Educación Para el Trabajo en las II.EE. Asimismo, estos laboratorios cuentan con el soporte técnico
								  adecuado para su sostenibilidad de manera que los estudiantes del 4to y 5to grado de secundaria dispongan de una especialización en computación avanzada,
									 electricidad o electrónica y culminen el grado debidamente certificado por la Universidad Nacional de Ingeniería (UNI) o el Centro Tecnológico Minero (CETEMIN).</p><br>
							<p>Los docentes de Educación Para el Trabajo son capacitados por expertos de la Universidad Nacional de Ingeniería (UNI) o el Centro Tecnológico Minero (CETEMIN)
								 en los cursos Microsoft Excel Avanzado y Diseño de Páginas Web, Electricidad o Electrónica para poder transmitir los conocimientos a los estudiantes en las aulas.
								  Asimismo, estos docentes al culminar su capacitación también reciben las certificaciones correspondientes.</p>


							<div class="blank"></div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-md-4 animate-box text-center">
											<div class="doctor">
												<div class="staff-img2" style="background-image: url(images/photos/img_electricidad.jpg);"></div>
												<h3><a href="#">Electricidad</a></h3>
											</div>
										</div>
										<div class="col-md-4 animate-box text-center">
											<div class="doctor">
												<div class="staff-img2" style="background-image: url(images/photos/img_electronica.jpg);"></div>
												<h3><a href="#">Electrónica</a></h3>
											</div>
										</div>

										<div class="col-md-4 animate-box text-center">
											<div class="doctor">
												<div class="staff-img2" style="background-image: url(images/photos/img_computacion.jpg);"></div>
												<h3><a href="#">Computación</a></h3>
											</div>
										</div>
										</div>

							<br>
							<br>
						</div>
					</div>

			</div>
		</div>
	</div>
</div>
</div>



        <!-- testimonial -->
        <div id="testimonial" class="testimonial">
            <div class="dark-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="title fadeInDown">
                        <h2>BENEFICIARIOS</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <!-- Set up your HTML -->
                        <div>
                          <div>
                                <p>
                                  Los beneficiarios del proyecto serán 6,900 estudiantes del 4to y 5to grado de secundaria de las 12 II.EE de la
									provincia de Pisco durante los tres primeros años de implementación (2018-2021), 38 docentes del área de
									educación para el trabajo, e indirectamente 13,800 padres y hermanos. Incluyendo el período de
									sostenibilidad del proyecto (2018-2030), se espera beneficiar a aproximadamente 62,100 estudiantes.
                                </p>

                                <b><span style="text-align: center; font-size: 20px;">Jefe del Proyecto</span></b>
                            	<br>

                                <span>Joel Ascencio</span>
                                <div class="blank"></div>
                                <div class="signature">
                                    <div class="doctor">
                                    <div class="staff-img2" style="background-image: url(images/photos/joel.jpg);"></div></div>
                                </div>
                          </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- // testimonial -->

	<div id="works" class="works section">
        	<div></div>
            <div class="container2">
                <div class="row2">
                    <div class="col-md-12" style="padding-bottom: 150px;">
                        <div class="title fadeInDown">
                            <h2>Actividades</h2>
                            <p>Algunas de las actividades que se realizan en los distintos colegios de la ciudad de Pisco</p>
                        </div>

                        <div class="works-gallery">
                            <div id="mygallery">
                                <div>
                                    <img alt="" src="images/photos/IMG-20190816-WA0052.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Almunos pisco aprendizaje</h4>
                                            <p>Un nuevo comienzo en la educación de Pisco</p>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <img alt="" src="images/photos/IMG-20190827-WA0041.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Clases de comunicación</h4>
                                            <p>Módulos ayudan al aprendizaje</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/photos/IMG-20190812-WA0016.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Laboratorios tecnológicos</h4>
                                            <p>última generación en tecnología</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/small_photo2.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Pioneros en clases</h4>
                                            <p>Alumnos destacan en clases de electricidad</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/small_photo4.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Instinto Talento Pisco</h4>
                                            <p>Nuevo conocimientos adquiridos!</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/bg_student3.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">
                                            <h4>Proyección a futuro</h4>
                                            <p>Electricidad, electrónica y computación</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- other images... -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


	<!--
	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Professional Doctors</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-4.jpg);"></div>
						<h3><a href="#">Mary Smith</a></h3>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);"></div>
						<h3><a href="#">John Bowman</a></h3>
						<span>Orthopedic Surgeon</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);"></div>
						<h3><a href="#">Jenny Anderson</a></h3>
						<span>Health Care</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);"></div>
						<h3><a href="#">Bob Barker</a></h3>
						<span>Patient Services Manager</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-4.jpg);"></div>
						<h3><a href="#">Mary Smith</a></h3>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-2.jpg);"></div>
						<h3><a href="#">John Bowman</a></h3>
						<span>Orthopedic Surgeon</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-3.jpg);"></div>
						<h3><a href="#">Jenny Anderson</a></h3>
						<span>Health Care</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/staff-1.jpg);"></div>
						<h3><a href="#">Bob Barker</a></h3>
						<span>Patient Services Manager</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>-->

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
	<script src="js/owl.carousel.js"></script>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="js/wow.min.js"></script>
	<script src="js/jquery.justifiedGallery.min.js" language="javascript" type="text/javascript"></script>
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
