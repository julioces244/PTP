
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

							<li class="btn-cta has-dropdown active">
								<a class="letter" href="{{ url('oportunidades_empleo')}}">Oportunidades</a>
								<ul class="dropdown">
									<li><a href="{{url('innovacion')}}">Valor Pisco</a></li>
									<li><a href="{{url('oportunidades_empleo')}}">Empleo</a></li>
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


<div id="qbootstrap-services">
  <div class="container">

		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
				<h2>Valor Pisco</h2>

			</div>
		</div>

    <div class="row">
      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_monitor.png"></i>
          </span>
          <div class="desc">
            <p>Valor Pisco</p>
          </div>
        </div>
      </div>


    </div>
    <!-- <div class="blank"></div>-->


  </div>
</div>


<div class="qbootstrap-departments">
<div class="row">
<div class="department-wrap animate-box">
	<div class="container">
	<div class="col-md-12">
		<div class="desc">
			<div>

			<h2 style="text-align: center;"><a href="departments-single.html" style="color: #91AE34">¿Qué es "Valor Pisco"?</a></h2>
			<br>
			<p>Valor Pisco es una iniciativa de innovación abierta y creación de valor para vincular el Programa Talento Pisco con la actividad empresarial provincial, regional y nacional. La iniciativa identifica oportunidades de innovación y creación de valor en el campo tecnológico para micro, pequeñas, medianas y grandes empresas. Mediante esta iniciativa el equipo talento Pisco, conformado por docentes, estudiantes destacados certificados, técnicos e ingenieros (y apoyo de la UNI y CETEMIN) brindan soluciones a desafíos que enfrentan cotidianamente las empresas. Los beneficios de las soluciones encontradas son compartidos entre la empresa participante y el Programa Talento Pisco.</p>
					 <p>Etapas de Valor Pisco:</p>

					 <ul>
					 	<li>Selección y priorización de sectores, actividad empresarial y empresas para Valor Pisco.</li>
						<li>Presentación, coordinación y suscripción de convenio Valor Pisco con empresas.</li>
						<li>Entrevistas de levantamiento de desafíos tecnológicos y designación del Project Champion de la empresa.</li>
						<li>Visitas a la empresa y sus operaciones con desafíos tecnológicos y caracterización de desafíos.</li>
						<li>Selección de desafíos y elaboración de prototipos.</li>
						<li>Elaboración de solución y eventualmente invitación y precalificación de proveedores en caso el desafío a resolver demande otras espacialidades.</li>
						<li>Recepción de ofertas y evaluación de soluciones a desafíos tecnológicos, los desafíos y soluciones se encontraran en la plataforma Programa Talento Pisco.</li>
						<li>Selección de soluciones a desafíos tecnológicos, a cargo de una comisión (3 representantes del Programa Talento Pisco y 2 de la empresa) de una terna de soluciones al desafío identificado. Luego el Project Champion seleccionará la mejor propuesta de solución a ser implementada en la empresa.</li>
						<li>Coaching pitchs del desafío tecnológico, colaborador de la empresa que presenta el desafío y la solución, podría ser el Project Champion.</li>
						<li>Evaluación y escalamiento de la solución de desafíos a otras empresas y sectores económicos.</li>
					</ul>
			</div>
		</div>
	</div>
	</div>
</div>


</div>
<br><br><br><br>
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
