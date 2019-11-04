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

	<link rel="stylesheet" href="css/justifiedGallery.min.css">

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
									<li><a class="letter" href="{{ url('index')}}">Inicio</a></li>
									<li><a class="letter" href="{{ url('bienvenido')}}">Bienvenido</a></li>

									<li class="btn-cta has-dropdown active">
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

									<li><a class="letter" href="{{ url('contacto')}}">Contacto</a></li>

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






	<!--

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

						<span>Monday – Friday: 08.00 am – 06.00 pm</span><br>
						<span>Saturday – Sunday: 08.00 am – 04.00 pm</span><br>
						<span>Sunday: 08.00 am – 02.00 pm</span>
					<a href="#" class="btn btn-primary">Leer más</a>
				</div>
			</div>
		</div>
	</div>-->


	<!-- TERMINO DEL HEAD-->


	<!-- about
        <div id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 wow fadeInLeft">
                        <div class="author-thumb text-center">
                            <img src="images/empresario3.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInRight">
                        <div class="about-intro">
                            <h3>PISCO APRENDIZAJE</h3>
                            <h5>Angelisa Easter Lisa, 28 years young, born and grew up in Australia, Grand Line. Highly motivated creative designer with international client portfolio.</h5>
                            <span class="divider"></span>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- // about -->


        <!-- process -->
        <div id="process" class="process section">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2 style="color: #000">PROGRAMA</h2>
                        <div class="blank"></div>
                        <p>Nuestra propuesta consiste en emprender los tres proyectos Pisco Aprendizaje, Pisco Digital y Pisco Tecnología en la provincia de Pisco de manera que los estudiantes tengan el mejor estándar en logros de aprendizaje y habilidades tecnológicas del país. Además, el Estudiante de Talento Pisco estará debidamente certificado y será formado como persona con habilidades y visión global, y con mayores oportunidades de empleo y desarrollo. Para lograr estos objetivos el "Programa Talento Pisco" creará una Plataforma para la Excelencia Formativa y el Empleo que acompañe a los estudiantes y todos los stakeholders relacionados en la continuidad de sus estudios técnicos y superiores, y de empleo.</p>
                    </div>

                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                        <div class="process-inner">
                            <div class="icon-holder">
                            	<img src="images/icons/PiscoAprendizajeLogo_min.png">


                            </div>
                            <h4 class="heading"></h4>
                            <p class="description">Mejora de logros de Aprendizaje para estudiantes de 1ro y 2do de Educación Secundaria.</p>
                            <br>
                        </div>
                    </div>

                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4">
                        <div class="process-inner">
                            <div class="icon-holder">
                            	<img src="images/icons/PiscoDigitalLogo_min.png">

                            </div>
                            <h4 class="heading"></h4>
                            <p class="description">Educación Digital para estudiantes de 3ro grado de secundaria con certificación reconocida.</p>
                            <br>
                        </div>
                    </div>

                    <div class="proecess-block col-xs-12 col-sm-6 col-md-4 ">
                        <div class="process-inner">
                            <div class="icon-holder">
                            	<img src="images/icons/PiscoTecnologíaLogo_min.png">

                            </div>
                            <h4 class="heading"></h4>
                            <p class="description">Educación para el Trabajo Técnico Escolar para los alumnos del 4to y 5to de secundaria con certificación reconocida.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- // process -->



        <!-- <div class="qbootstrap-departments">
		<div class="row">
			<div class="department-wrap animate-box">

				<div class="grid-1 col-md-6" style="background-image: url(images/bg_student2.jpg); margin-left: auto; margin-right: auto; display: block;"></div>
				<div class="grid-2 col-md-6">
					<div class="desc">
						<h2><a href="departments-single.html">Plataforma para la Excelencia y el Empleo</a></h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quaerat est excepturi officia, repellendus aliquid corporis voluptate labore velit tenetur eos. Amet, dolore pariatur, delectus ducimus quo quod illum inventore.</p>
						<ul>
							<li><p>Diseño UI y responsivo de páginas web.</p></li>
							<li><p>Utilización de Microsoft Office Word</p></li>
							<li><p>Utilización de Microsoft Office Excel</p></li>
							<li><p>Utilización de Microsoft Office Power Point</p></li>
							<li><p>Conocimientos en electricidad</p></li>
						</ul>

					</div>
				</div>
							</div>
		</div>


	</div>-->










<!-- experience
        <div id="experience" class="experience section">
            <div ></div>
            <div class="container2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="exp-block">
                            <h2 style="font-size: 30px; color: white">MISIÓN</h2>
                            <ul class="list-none">
                                <li>
                                    <h4 style="color: white">Nuestra Misión</h4>

                                    <p>"En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimosonado con la atención de la agenda social, medioambiental y promoción de la inversión privada."</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="exp-block">
                            <h2 style="font-size: 30px; color: white" >VISIÓN</h2>
                            <ul class="list-none">
                                <li>
                                    <h4 style="color: white">Nuestra Visión</h4>

                                    <p>"En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimosonado con la atención de la agenda social, medioambiental y promoción de la inversión privada."</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- // experience -->

				<div id="qbootstrap-doctor" style="padding-bottom: -300px; background-color:#FFF" class="qbootstrap-bg-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 image-content">
								<div class="doctor animate-box">

									<div class="title">
										<center><h2 style="color: #000">Objetivos</h2></center>
									</div>


									<!--
									<span>Dental Hygienist</span>
									<ul class="qbootstrap-social">
										<li><a href="#"><i class="icon-facebook2"></i></a></li>
										<li><a href="#"><i class="icon-twitter2"></i></a></li>
										<li><a href="#"><i class="icon-yahoo2"></i></a></li>
										<li><a href="#"><i class="icon-google2"></i></a></li>
									</ul>-->
									<div class="desc">
										<p></p><br>
										<ul>
											<li type="1">Mejorar los logros de aprendizaje para estudiantes de 1ro y 2do de Educación Secundaria.</li>
											<br>

											<li type="1">Desarrollar en los estudiantes 3er grado de secundaria habilidades adecuadas en el uso de TIC’s y certificar a los docentes y estudiantes.</li>
											<br>
											<li type="1">Desarrollar habilidades adecuadas para la empleabilidad en tecnología (electricidad, electrónica y computación) y certificar a los docentes y estudiantes del 4to y 5to grado de secundaria.</li>
										</ul>
										<br>

										<div class="blank"></div>

											<div class="container-fluid">
												<div class="row">
													<div class="col-md-4 animate-box text-center">
														<div class="doctor">
															<div class="staff-img2" style="background-image: url(images/bg_pisco_aprendizaje.jpg);"></div>
															<img src="images/LogosPTP/Pisco_apr.png" alt="" height=auto width=50%>
														</div>
													</div>
													<div class="col-md-4 animate-box text-center">
														<div class="doctor">
															<div class="staff-img2" style="background-image: url(images/bg_pisco_digital.jpg);"></div>
															<img src="images/LogosPTP/Pisco_dig.png" alt="" height=auto width=35%>
														</div>
													</div>
													<div class="col-md-4 animate-box text-center">
														<div class="doctor">
															<div class="staff-img2" style="background-image: url(images/bg_pisco_tecnologia.jpg);"></div>
															<img src="images/LogosPTP/Pisco_tec.png" alt="" height=auto width=50%>
														</div>
													</div>
												</div>
											</div>
										<br>
										<br>
										</div>




									<!--
										<div class="qbootstrap-departments" style="background-color: #91AE34">
											<div class="row">

												<div class="department-wrap animate-box">
													<div class="grid-1 col-md-6 col-md-push-6" style="background-image: url(images/small_photo2.jpg);"></div>
													<div class="grid-2 col-md-6 col-md-pull-6">
														<div class="desc">
															<h2><a href="departments-single.html">Misión</a></h2>
															<p>"En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimosonado con la atención de la agenda social, medioambiental y promoción de la inversión privada."</p>

														</div>
													</div>
												</div>
											</div>
									</div>

									<div class="blank"></div>
									<div class="blank"></div>
									<div class="blank"></div>



									<div class="qbootstrap-departments" style="background-color: #91AE34" >
											<div class="row">

												<div class="department-wrap animate-box">
													<div class="grid-1 col-md-6 " style="background-image: url(images/small_photo1.jpg);"></div>
													<div class="grid-2 col-md-6 ">
														<div class="desc">
															<h2><a href="departments-single.html">Visión</a></h2>
															<p>"En Centro para la Competitividad y el Desarrollo (CCD) nos distinguimosonado con la atención de la agenda social, medioambiental y promoción de la inversión privada."</p>

														</div>
													</div>
												</div>
											</div>
									</div>

									-->


								</div>

						</div>
					</div>
				</div>
			</div>



        <div id="works" class="works section">
        	<div></div>
            <div class="container2">
							<!-- Ampliar opcion1
							<div class="">
								<a onMouseOver="">
								<img src="images/rimage_1.jpeg" alt="" class="zoom"></a>
							</div>-->


								<!-- The Modal -->


                <div class="row2">
                    <div class="col-md-12" style="padding-bottom: 150px;">

                    	<div class="title fadeInDown">
                            <h2>Actividades</h2>
                            <p>Algunas de las actividades que se realizan en los distintos colegios de la ciudad de Pisco</p>
                        </div>
                        <div class="works-gallery">
                            <div id="mygallery">

                                <div>
																	<img id="myImg" src="images/photos/IMG-20190816-WA0054.jpg">
																	<div id="myModal" class="modal">
																		<span class="close">&times;</span>
																		<img class="modal-content" id="img01">
																		<div id="caption"></div>
																	</div>
                                </div>


                                <div>
                                    <img id="myImg" alt="" src="images/photos/IMG-20190819-WA0001.jpg"/>
                                    <div id="myModal" class="modal">
																			<span class="close">&times;</span>
																			<img class="modal-content" id="img02">
                                        <div id="caption"></div>
                                    </div>
                                </div>

                                <div>
                                    <img alt="" src="images/photos/IMG-20190816-WA0064.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">

                                            <p>Computación y diseño web, a cargo de profesores capacitados y de excelente nivel.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/photos/IMG-20190826-WA0027.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">

                                            <p>Aprendiendo gestión de correos, herramientas TIC's.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <img alt="" src="images/photos/IMG-20190816-WA0063.jpg"/>
                                    <div class="item-musk">
                                        <div class="item-caption">

                                            <p>Cursos como Microsoft Office Word, Excel y Power Point</p>
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

        <div class="blank"></div>






	<!--

	<div id="qbootstrap-doctor" class="qbootstrap-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 image-content">
					<div class="doctor animate-box">
						<img class="img-responsive" src="images/img_bg_5.jpg" alt="">
						<h2><a href="doctors-single.html">Dr. Mary Smith</a></h2>
						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
						<div class="desc">
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p><br>
							<h3>Biography</h3>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts.</p><br>
							<h3>Professional Life</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						</div>
						<div class="contact-info">
							<h2>Contacts</h2>
							<p><i class="icon-location4"></i> 198 West 21th Street, Suite 721 New York NY 10016</p>
							<p><i class="icon-phone-outline"></i> +01-123-456-7890</p>
							<p><i class="icon-paperplane"></i><a href="#"> medical@email.co</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 sticky-parent">
					<div id="sticky_item">
						<h3>Doctors Schedule</h3>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Monday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Liposuction</h4>
							</div>
						</div>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Tuesday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Reconstructive Surgery</h4>
							</div>
						</div>
						<div class="schedule">
							<span class="icon"><i class="icon-calendar3"></i></span>
							<div class="desc">
								<span>Thursday</span>
								<span>8:00 am - 12:00 pm</span>
								<h4>Liposuction</h4>
							</div>
						</div>
						<p class="btn-big"><a href="appointment.html" class="btn btn-primary">Make an Appoinment</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>-->

	<!--



	-->



<!--

	<div id="qbootstrap-doctor">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Aportes</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/small_photo1.jpg);"></div>
						<h3><a href="#">Pisco Aprendizaje</a></h3>
						<span>Pisco aprendizaje es un programa diseñado para alumnos de 1er y 2do grado de secundaria con el objetivo de mejorar
						las cualidades del estudiante en áreas de comprensión lectora y matemáticas.</span>-->
						<!--
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>-->
						<!--
					</div>
				</div>
				<div class="col-md-6 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/small_photo2.jpg);"></div>
						<h3><a href="#">Pisco Digital</a></h3>
						<span>Pisco digital es un programa diseñado para alumnos de 3er grado de secundaria con el objetivo de mejorar
						las cualidades del estudiante en áreas TIC's, Windows, Gestión de correos, Microsoft Word, Microsoft Excel, Micrososft
						Power Point.</span>
						 -->
						<!--
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>-->
						<!--
					</div>
				</div>





				<div class="col-md-6 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/small_photo4.jpg);"></div>
						<h3><a href="#">Plataforma para la excelencia formativa y empleo</a></h3>
						<span>Esta plataforma virtual tiene como objetivo "poner en vitrina" a los estudiantes certificados con potenciales empleadores
						de Pisco, de la región Ica, del sur y del país principalmente.</span>-->
						<!--
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>



				<div class="col-md-6 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/small_photo4.jpg);"></div>
						<h3><a href="#">Plataforma para la excelencia formativa y empleo</a></h3>
						<span>Esta plataforma virtual tiene como objetivo "poner en vitrina" a los estudiantes certificados con potenciales empleadores
						de Pisco, de la región Ica, del sur y del país principalmente.</span>-->
						<!--
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
	<script src="js/jquery.justifiedGallery.min.js" language="javascript" type="text/javascript"></script>

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

	<script type="text/javascript">
		$(document).ready(function(){
			$('.zoom').click(function() {
					$(this).addClass('transition');
			});
		});
	</script>

	<script type="text/javascript">
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById("myImg");
			var modalImg = document.getElementById("img01");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			  modal.style.display = "block";
			  modalImg.src = this.src;
			  captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}
</script>
	<script src="js/menu.js" language="javascript" type="text/javascript"></script>
	</body>
</html>
