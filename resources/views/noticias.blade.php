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
								<img src="{{asset('images/TalentoPiscoLogo.png')}}" height="150px" width="500px">

								<div class="num">
								</div>
							</div>
							<div class="col-md-4">

								<img src="{{asset('images/LogosPTP/logocamisea.jpg')}}" height="150px" width="400px">

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

							<li>
								<a class="letter" href="{{ url('blockstudent')}}">Estudiante</a>
							</li>
							<li>
								<a class="letter" href="{{ url('blockparent')}}">Padres</a>
							</li>
							<li>
								<a class="letter" href="{{ url('blockteacher')}}">Docentes</a>
							</li>
							<li>
								<a class="letter" href="{{ url('login')}}">Camisea</a>
							</li>

							<li class="btn-cta has-dropdown">
								<a class="letter" href="{{ url('oportunidades_empleo')}}">Oportunidades</a>
								<ul class="dropdown">
									<li><a href="{{url('')}}">Innovación Abierta y Creación de Valor</a></li>
									<li><a href="{{url('')}}">Empleo</a></li>
								</ul>
							</li>

							<li>
								<a class="letter" href="{{ url('blockfund')}}">Fondo Talento Pisco</a>
							</li>

							<li class="letter active"><a href="{{ url('noticias')}}">Noticias</a></li>

							<li><a class="letter" href="{{ url('contacto')}}">Contacto</a></li>
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
								<a href="{{ url('login')}}">
								<img src="images/LogosPTP/pisco_tal.png"></a>
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


<div id="qbootstrap-blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url(images/photos/IMG-20190819-WA0006.jpg);">

								</a>
							</div>
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a>Nuevas clases de matemáticas</a></h2>
									<div class="post-meta">
										<span><a>Educativa</a></span>
										<span>Agosto 20, 2017</span>
									</div>
									<p>Luego de unas largas vacaciones, los alumnos de la escuela Beatita de Humay comienzan las clases con los nuevo módulos de matemáticas, el cual comprende temas de razonamiento matemática y análisis situacionales</p>
									<!--
									<p><a href="blog-single.html" class="btn btn-primary">Leer más</a></p>-->
								</div>
							</div>
						</div>
					</div>
					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url(images/photos/IMG-20190812-WA0053.jpg);">

								</a>
							</div>
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a>Reconocen al Programa Talento Pisco por su apoyo a la educación nacional</a></h2>
									<div class="post-meta">
										<span><a>Variados</a></span>
										<span>Agosto 25, 2018</span>
									</div>
									<p>Los resultados obtenidos en los alumnos de los colegios pertenecientes al Programa Talento Pisco han sido satisfactorios, y muchos de ellos ya cuentan con certificados en herramientas digitales, así como certificados en electrónica y electricidad.</p>
									<!--
									<p><a href="blog-single.html" class="btn btn-primary">Leer más</a></p>-->
								</div>
							</div>
						</div>
					</div>

					<div class="blog-wrap animate-box">
						<div class="row">
							<div class="col-md-12">
								<a href="#" class="blog-img" style="background-image: url(images/photos/IMG-20190820-WA0015.jpg);">

								</a>
							</div>
							<div class="col-md-12">
								<div class="blog-desc">
									<h2><a>¡Logros de aprendizaje!</a></h2>
									<div class="post-meta">
										<span><a>Educativa</a></span>
										<span>Julio 20, 2017</span>
									</div>
									<p>La representante y gerente de logística; Fátima Cabrera ; del Centro para la Competitividad y el Desarrollo (CCD), verifica las instalaciones de los laboratorios de los colegios Fe y Alegria y Raúl Porras Barnechea, los cuales contemplan tecnología de última generación.</p>
									<!--
									<p><a href="blog-single.html" class="btn btn-primary">Leer más</a></p>-->
								</div>
							</div>
						</div>
					</div>
					<ul class="pager">
					    <li class="previous disabled"><a href="#">&larr; Anterior</a></li>
					    <li class="next"><a href="#">Siguiente &rarr;</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<aside class="sidebar">

            <!--
						<div class="side animate-box">
							<h2>Categorpias</h2>
							<ul class="list">
								<li><a href="#">Inspirational <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Medicines <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Operational <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
								<li><a href="#">Laboratories <i class="icon-check"></i> <span class="badge badge-default badge-pill">10</span></a></li>
							</ul>
						</div>-->

						<div class="side animate-box">
							<h2>Impacto nacional</h2>
							<div class="post">
								<a href="https://elcomercio.pe/publirreportaje/talento-pisco-desarrolla-educacion-noticia-635583">
									<div class="blog-img" style="background-image: url(images/photos/IMG-20190813-WA0011.jpg);"></div>
									<div class="desc">
										<span>Mayo 15, 2019</span>
										<h3><em><strong>ElComercio: </strong>"El talento de Pisco se desarrolla con educación."</em></h3>
									</div>
								</a>
							</div>
							<div class="post">
								<a href="https://larepublica.pe/empresa/1469898-historia-transformacion-colegios-pisco/">
									<div class="blog-img" style="background-image: url(images/photos/IMG-20190816-WA0048.jpg);"></div>
									<div class="desc">
										<span>Mayo 16, 2019</span>
										<h3><em><strong>La República: </strong>"Una historia de transformación en los colegios de Pisco."</em></h3>
									</div>
								</a>
							</div>
							<div class="post">
								<a href="https://elcomercio.pe/publirreportaje/programa-social-empieza-cambiar-educacion-pisco-noticia-620869">
									<div class="blog-img" style="background-image: url(images/photos/IMG-20190813-WA0008.jpg);"></div>
									<div class="desc">
										<span>Marzo 28, 2019</span>
										<h3><em><strong>ElComercio: </strong>"Un programa social empieza a cambiar la educación de Pisco."</em></h3>
									</div>
								</a>
							</div>
						</div>
						<div class="side animate-box">
							<h2>Frase del día</h2>
							<p>"Desechad tristezas y melancolías. La vida es amable, tiene pocos días y tan sólo ahora la hemos de gozar."</p>
              <p>Federico G. Lorca</p>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>


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

	@endsection
