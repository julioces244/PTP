

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
								<img class="imglogo1" src="{{asset('images/TalentoPiscoLogo.png')}}" height="150px" width="500px">

								<div class="num">
								</div>
							</div>
							<div class="col-md-4">

								<img class="imglogo1" src="{{asset('images/LogosPTP/logocamisea.jpg')}}" height="150px" width="400px">

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
							<li class="letter active"><a href="{{ url('bienvenido')}}">Bienvenido</a></li>

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
	<div class="qbootstrap-departments">
		<div class="row">
			<div class="department-wrap animate-box">
				<div class="grid-3 col-md-10 container">
					<div class="desc">

						<h2><a href="departments-single.html">BIENVENIDO</a></h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quaerat est excepturi officia, repellendus aliquid corporis voluptate labore velit tenetur eos. Amet, dolore pariatur, delectus ducimus quo quod illum inventore.orem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quaerat est excepturi officia, repellendus aliquid corporis voluptate labore velit tenetur eos. Amet, dolore pariatur, delectus ducimus quo quod illum inventore.orem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quaerat est excepturi officia, repellendus aliquid corporis voluptate labore velit tenetur eos. Amet, dolore pariatur, delectus ducimus quo quod illum inventore.orem ipsum dolor sit amet</p>
						<ul>
							<li><p>Diseño UI y responsivo de páginas web.</p></li>
							<li><p>Utilización de Microsoft Office Word</p></li>
							<li><p>Utilización de Microsoft Office Excel</p></li>

							<li><p>Utilización de Microsoft Office Power Point</p></li>
							<li><p>Conocimientos en electricidad</p></li>
						</ul>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, velit doloremque placeat illum voluptatem eius, reprehenderit nulla suscipit ducimus incidunt, fugit dolorum. Repellendus perferendis sequi esse debitis, vitae laudantium ad.</p>
						<div align="center">
						<img class="grid-3 col-md-12 container" src="images/bg_student4.jpg" height="750px" align="center">
						</div>-->
						<!--
						<div class="grid-3 col-md-10 container" style="background-image: url(images/bg_student3.jpg);"></div>
					</div>
				</div>

			</div>
		</div>
	</div>-->


	<section class="section bg-cover" data-background="images/bg_student4.jpg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-4 position-relative success-video">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="400px" type="text/html" src="https://www.youtube.com/embed/KFLdwOzBBSo"></iframe>


      </div>
      <div class="col-lg-4 col-sm-8">
        <div class="bg-white p-5">
          <h2><a>Bienvenido!</a></h2>
          <p>Gracias por ingresar a un espacio donde puedes encontrar un Programa con opciones para un futuro educativo mejor.
							Pluspetrol, comprometido con el desarrollo educativo de la provincia de Pisco, ha desarrollado Programa Talento Pisco. Esta iniciativa se presenta como una excelente oportunidad para los estudiantes, docentes, instituciones educativas y familias de la provincia de Pisco que busca mejorar la calidad educativa.
							El Programa Talento Pisco cuenta con tres proyectos: Pisco Aprendizaje, Pisco Digital y Pisco Tecnología. Estos proyectos permitirán desarrollar las habilidades de los estudiantes en logros de aprendizaje y educación técnica. Este programa brinda educación contextualizada y personalizada, equipamiento moderno y conocimientos avanzados que aseguran el éxito futuro de los estudiantes.
							El estudiante del Programa Talento Pisco es un joven con altos niveles de logros de aprendizaje y formación técnica, es decir, con las condiciones educativas adecuadas para generar un futuro prometedor y exitoso.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>







<!--
        <div id="qbootstrap-choose">
		<div class="container-fluid">
			<div class="row">
				<div class="choose">
					<div class="half img-bg" style="background-image: url(images/bg_student5.jpg);"></div>
					<div class="half features-wrap">
						<div class="qbootstrap-heading animate-box">
							<h2>¿Porqué hacemos esto?</h2>
							<p>Nuestro objetivo es mejorar la calidad de la educación del estudiante peruano, brindandole mejores oportunidades
							laborales al culminar su educación secundaria. Así como mejorar los indicadores de los promedios nacionales por
							estudiante hasta mas del 50% para el 2030.</p>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-group-outline"></i></span>
							<div class="desc">
								<h3>Ubicación</h3>
								<p>Departamento de Ica, ciudad de Pisco. Involucra a varios de los colegios que quieran formar parte.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-flow-merge"></i></span>
							<div class="desc">
								<h3>Programas</h3>
								<p>Los programas son Pisco Aprendizaje, Pisco Tecnológico y Pisco Digital.</p>
							</div>
						</div>
						<div class="features animate-box">
							<span class="icon text-center"><i class="icon-document-text"></i></span>
							<div class="desc">
								<h3>Estudiantes</h3>
								<p>Dirigido estrictamente para alumnos de primero de secundaria hasta quinto de secundaria.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->


	<!--
	<div id="qbootstrap-doctor" class="qbootstrap-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 image-content">
					<div class="doctor animate-box">

						<h2><a href="doctors-single.html">Bienvenido</a></h2>

						<span>Dental Hygienist</span>
						<ul class="qbootstrap-social">
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-yahoo2"></i></a></li>
							<li><a href="#"><i class="icon-google2"></i></a></li>
						</ul>
						<div class="desc">
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p><br>
							<h3>Misión</h3>
							<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts far from the countries Vokalia and Consonantia, there live the blind texts.</p><br>
							<h3>Visión</h3>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>-->

	<!-- experience -->
        <div id="experience" class="experience section">
            <div ></div>
            <div class="container2">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 ">
                        <div class="exp-block">
                            <h2 style="font-size: 30px; color: white">NUESTRA MISIÓN</h2>
                            <ul class="list-none">

																	<p><br>Mejorar sustancialmente la educación secundaria en la provincia de Pisco buscando la excelencia formativa y la especialización técnica en los estudiantes.<br></p>


                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="exp-block">
                            <h2 style="font-size: 30px; color: white" >NUESTRA VISIÓN</h2>
                            <ul class="list-none">

                                    <p><br>Jóvenes con alto nivel educativo y habilidades tecnológicas que destacan a nivel país.<br><br><br></p>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // experience -->








<!--
	<div id="qbootstrap-services">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Estudiante Talento Pisco Certificado</h2>
					<p style="font-size: 25px">Excelencia Formativa</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-flow-merge"></i>
						</span>
						<div class="desc">

							<p>Información académica y vocacional para continuar estudios.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">

							<p>Convenios para visitas de alumnos a institutos y universida.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-flow-merge"></i>
						</span>
						<div class="desc">

							<p>Información sobre fondos públicos, privados, nacionales e internacionales.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">

							<p>Patrocinadores adjajdw dawdhjawd dojawjdoaw adadad<br><br><br></p>

						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-params"></i>
						</span>
						<div class="desc">
							<p>Lista de las universidades e institutos para convalidar cursos.</p>
						</div>
					</div>
				</div>

			</div>
			<div class="blank"></div>

			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">

					<p style="font-size: 25px">Empleo</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-flow-merge"></i>
						</span>
						<div class="desc">

							<p>Plataforma virtual para conectar alumnos y empleadores.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-params"></i>
						</span>
						<div class="desc">

							<p>Bolsa de trabajo provincial, regional y nacional.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-lab2"></i>
						</span>
						<div class="desc">

							<p>Convenios para visitas de alumnos a principales empresas.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 animate-box">
					<div class="services">
						<span class="icon">
							<i class="icon-heart4"></i>
						</span>
						<div class="desc">

							<p>Convenios de empleo público y privado.</p>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>


-->






        <!--

	-->




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
