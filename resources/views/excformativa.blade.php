
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
							<li><a href="{{ url('index')}}">Inicio</a></li>
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

							<li class="active">
								<a href="{{ url('excformativa')}}">Excelencia Formativa</a>
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

							<li class="btn-cta has-dropdown">
								<a href="{{ url('oportunidades_empleo')}}">Oportunidades</a>
								<ul class="dropdown">
									<li><a href="{{url('')}}">Innovación Abierta y Creación de Valor</a></li>
									<li><a href="{{url('')}}">Empleo</a></li>
								</ul>
							</li>

							<li>
								<a href="ptecnologia.html">Fondo Talento Pisco</a>
							</li>

							<li><a href="{{ url('noticias')}}">Noticias</a></li>

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
        <h2>Estudiante Talento Pisco Certificado</h2>
        <p style="font-size: 25px">Excelencia Formativa</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_papper.png"></i>
          </span>
          <div class="desc">

            <p>Información académica y vocacional para continuar estudios.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_hands4.png"></i>
          </span>
          <div class="desc">

            <p>Convenios para visitas de alumnos a institutos y universidades líderes en digital y tecnología.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_papper.png"></i>
          </span>
          <div class="desc">

            <p>Información sobre fondos públicos, privados, nacionales e internacionales.<br><br></p>
          </div>
        </div>
      </div>

      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_company.png"></i>
          </span>
          <div class="desc">

            <p>Patrocinio Empresarial.<br><br><br></p>

          </div>
        </div>
      </div>
      <div class="col-md-4 animate-box">
        <div class="services">
          <span class="icon">
            <i><img src="images/icons/ic_convenio.png"></i>
          </span>
          <div class="desc">
            <p>Convalidaciones. <br><br><br></p>
          </div>
        </div>
      </div>

    </div>
    <div class="blank"></div>


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
