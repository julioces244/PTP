
@extends('.layouts/mainmenu')

@section('content')

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
								<img src="./images/talentopiscologo.png" height="150px" width="500px">

								<div class="num">
								</div>
							</div>
							<div class="col-md-4">

								<img src="./images/logosptp/logocamisea.jpg" height="150px" width="400px">

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
							<li class="active"><a href="{{ url('index')}}">Inicio</a></li>
							<li><a href="{{ url('bienvenido')}}">Bienvenido</a></li>

							<li class="btn-cta has-dropdown">
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
							<li>
								<a href="{{ url('oportunidades_empleo')}}">Oportunidad del Empleo</a>
							</li>
							<li>
								<a href="ptecnologia.html">Estudiante</a>
							</li>
							<li>
								<a href="ptecnologia.html">Padres</a>
							</li>
							<li>
								<a href="ptecnologia.html">Docentes</a>
							</li>
							<li>
								<a href="{{ url('login')}}">Camisea</a>
							</li>

							<li><a href="{{ url('contacto')}}">Contacto</a></li>
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
								<h1 class="doc-holder"><strong>"Mejorando la calidad en la educación peruana"</strong></h1>
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

								<img src="images/LogosPTP/pisco_apr.png">

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

								<img src="images/LogosPTP/pisco_dig.png">

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

								<img src="images/LogosPTP/pisco_tec.png">

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
					<img src="images/LogosPTP/pisco_apr.png" alt="" height=auto width=40%>

					<p>Mejora de logros de Aprendizaje para estudiantes de 1ro y 2do de Educación Secundaria.</p>
					<a href="doctors.html" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-2">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<img src="images/LogosPTP/pisco_dig.png" alt="" height=auto width=25%>
					<p>Educación Digital para estudiantes de 3ro grado de secundaria con certificación reconocida.</p>
					<a href="pdigital.html" class="btn btn-primary">Leer más</a>
				</div>
				<div class="intro-grid color-3">
					<span class="icon"><i class="icon-wallet2"></i></span>
					<img src="images/LogosPTP/pisco_tec.png" alt="" height=auto width=35%>
					<p>
						Educación para el Trabajo Técnico Escolar para los alumnos del 4to y 5to de secundaria con certificación reconocida.
					</p>
					<a href="ptecnologia.html" class="btn btn-primary">Leer más</a>
				</div>
			</div>
		</div>
	</div>

	<div class="blank"></div>
	<div class="blank"></div>
	<div class="blank"></div>
	<div class="blank"></div>


	<div id="qbootstrap-choose">
		<div class="container-fluid">
			<div class="row">
				<div class="choose">
					<div class="half img-bg" style="background-image: url(images/bg_student5.jpg);"></div>
					<div class="half features-wrap">
						<div class="qbootstrap-heading animate-box">
							<h2>¿Qué es el Programa Talento Pisco?</h2>
							<p>Es un programa de Camisea que busca mejorar la educación secundaria de los
								estudiantes de esta provincia de Ica, dotándolos de nuevas habilidades y de
								 una visión global que les permita tener mayores oportunidades de empleo y desarrollo. </p>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i><img src="images/logosptp/pisco_apr.png" height=50% width=90%></i></span>
							<div class="desc">
								<p>En el primero y segundo grado de secundaria se desarrolla Pisco Aprendizaje, proyecto “Mejora de Logros de Aprendizaje para estudiantes de 1ero y 2do de educación secundaria”. En esta etapa se busca establecer las bases para una adecuada educación secundaria, superior y para la vida.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i><img src="images/logosptp/pisco_dig.png" height=50% width=70%></i></span>
							<div class="desc">

								<p>En el tercer grado se desarrolla Pisco Digital, proyecto “Educación Digital para estudiantes de 3ro de secundaria con certificación reconocida”. El objetivo de esta etapa es dotar a los estudiantes con las herramientas digitales para desenvolverse adecuadamente el mundo moderno.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i><img src="images/logosptp/pisco_tec.png" height=50% width=90%></i></span>
							<div class="desc">

								<p>En cuarto y quinto grado de secundaria es la especialización. En esta etapa se desarrolla Pisco Tecnología, proyecto “Educación para el trabajo técnico escolar para los alumnos del 4to y 5to de secundaria, con certificación”. Los estudiantes se especializan en computación avanzada, electricidad y electrónica.   </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="blank">

	</div>


	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2><img src="images/logosptp/pisco_tal.png" height=auto width=50% alt=""></h2>
					<p>En este proceso participan tres instituciones innovadoras, pioneras y líderes en el campo tecnológico y educativo del país: El Centro para la Competitividad y Desarrollo (CCD),
						 la Universidad Nacional de Ingeniería (UNI) y el Centro Tecnológico Minero (CETEMIN).</p>
					<p>En el programa participan de manera conjunta los estudiantes, los padres de familia, los directores y docentes, el Gobierno Regional de Ica,
						 la UGEL Pisco y Camisea cuyo operador es Pluspetrol, una de las empresas más importantes en exploración y producción de petróleo y gas de Latinoamérica, y la principal empresa de producción de hidrocarburos del país.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/bg_pisco_aprendizaje.jpg);"></div>
						<h3><a href="{{ url('pisco_aprendizaje')}}"><img src="images/logosptp/pisco_apr.png" height=50% width=50%></a></h3>
						<span></span>

					</div>
				</div>
				<div class="col-md-4 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/bg_pisco_digital.jpg);"></div>
						<h3><a href="{{ url('pisco_digital')}}"><img src="images/logosptp/pisco_dig.png" height=30% width=35%></a></h3>
						<span></span>

					</div>
				</div>
				<div class="col-md-4 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/bg_pisco_tecnologia.jpg);"></div>
						<h3><a href="{{ url('pisco_tecnologia')}}"><img src="images/logosptp/pisco_tec.png" height=50% width=50%></a></h3>
						<span></span>

					</div>
				</div>


			</div>
		</div>
	</div>

	<div id="qbootstrap-counter" class="qbootstrap-counters" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">

			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div align="center">
					<span class="qbootstrap-counter-label" style="font-size: 35px">Beneficiados</span></div>
					<div class="row">

						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-group-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Estudiantes</span>

						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-home-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="378" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Colegios</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-user-add-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="400" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Docentes Capacitados</span>
						</div>
						<div class="col-md-3 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-point-of-interest-outline"></i></span>
							<span class="qbootstrap-counter js-counter" data-from="0" data-to="4" data-speed="5000" data-refresh-interval="50"></span>
							<span class="qbootstrap-counter-label">Asociados</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- COMIENZA EL FOOTER -->
	<div id="qbootstrap-register" style="background-image: url(images/bg_student4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="date-counter text-center">
						<h2>Somos <strong class="color">Programa Talento Pisco!</strong></h2>
						<!--
						<h3>By Dr. <strong>Mary Smith</strong></h3>-->
						<!--
						<p class="countdown">
							<span id="days"></span>
							<span id="hours"></span>
							<span id="minutes"></span>
							<span id="seconds"></span>
						</p>-->
						<p><strong>Forma parte del gran cambio!</strong></p>
						<p><a href="#" class="btn btn-primary btn-lg">Aceptar <i class="icon-calendar3"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="qbootstrap-doctor">
		<div class="container-fluid">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Involucrados</h2>
					<!-- -->
					<p>La Universidad Nacional de Ingreniería (UNI), el Centro para la Competitividad y el Desarrollo (CCD) y el Centro
					   Tecnológico Minero (CETEMIN), 3 instituciones innovadoras, pionera y líderes en materia de logros de aprendizaje.
					   Así mismo se cuenta con el apoyo del Gobierno Regional de Ica, la Unidad de Gestión Educativa Local (UGEL ICA) y
					   Pluspetrol, una de las empresas más importantes en exploración y producción de petróleo y gas de Latinoamérica.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/lg_uni2.png); height: 50px; width: 150px"></div>
						<h3><a href="#">UNI</a></h3>
						<span>Universidad Nacional de Ingeniería</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/lg_ccd3.jpg); height: 50px; width: 150px"></div>
						<h3><a href="#">CCD</a></h3>
						<span>Centro para la Competitividad y el Desarrollo</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/lg_cetemin.png); height: 50px; width: 150px"></div>
						<h3><a href="#">CETEMENIN</a></h3>
						<span>Centro Tecnológico Minero</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/logo_gore3.jpg); height: 50px; width: 150px"></div>
						<h3><a href="#">GORE ICA</a></h3>
						<span>Gobierno Regional de Ica</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/logo_pluspetrol.jpg); height: 50px; width: 150px"></div>
						<h3><a href="#">PLUSPETROL</a></h3>
						<span>Empresa de petróleo y gas natural</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 animate-box text-center">
					<div class="doctor">
						<div class="staff-img" style="background-image: url(images/logos/logo_ugel.jpg); height: 55px; width: 170px"></div>
						<h3><a href="#">UGEL ICA</a></h3>
						<span>Unidad de Gestión Educativa Local</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
					</div>
				</div>
				<!--
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
				</div>-->
			</div>
		</div>
	</div>


	<footer id="qbootstrap-footer" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
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

				<div class="col-md-5 col-sm-4 col-xs-12 qbootstrap-widget">
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
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2017 Free HTML5. All Rights Reserved.</small>
                    <small class="block">Designed by <a href="https://qbootstrap.com/" target="_blank">QBootstrap.com</a> Avaiable on <a href="https://themefisher.com/free-bootstrap-templates" class="">Themefisher.com</a></small>
                </p>
			</div>
		</div>
	</footer>
	@endsection
