<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Block Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Layput main menu -->
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

  <link rel="stylesheet" href="plugins/slick/slick.css">
 <!-- themefy-icon -->
 <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
 <!-- animation css -->
 <link rel="stylesheet" href="plugins/animate/animate.css">
 <!-- aos -->
 <link rel="stylesheet" href="plugins/aos/aos.css">


 <!-- venobox popup -->
 <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body class="body">

  <nav class="qbootstrap-nav" role="navigation">
		<div class="top-menu" >
				<div class="row" id="navbar" style="border-color: red">
					<div class="col-xs-12 text-center" >
						<div class="menu-1">
							<ul>
								<li><a href="{{ url('index')}}">Inicio</a></li>
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

								<li class="letter active">
									<a class="letter" href="{{ url('blockfund')}}">Fondo Talento Pisco</a>
								</li>

								<li><a class="letter" href="{{ url('noticias')}}">Noticias</a></li>

								<li><a class="letter" href="{{ url('contacto')}}">Contacto</a></li>


							</ul>
						</div>
					</div>
				</div>

		</div>
	</nav>


<div class="blocktextp">
    <img src="{{asset('images/TalentoPiscoLogo.png')}}" alt="">
  <br>
  <br>
    <span class="blocktexts">En Construcción...</span>
    <img class="blockimage" src="{{asset('images/photos/fondoptp3.jpg')}}" alt="">
    <p></p>

</div>



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
