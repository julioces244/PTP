<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


</head>
<body>
	<br>

	<div class="container">
		@if(session()->has('failed_auth'))
		<div class="alert alert-danger" role="alert">
			{{session('failed_auth')}}
		</div>
		@endif
	</div>

<div class="login">




		<form class="form-group" action="{{route('login')}}" method="post">
			@csrf
			<center><img src="images/TalentoPiscoLogo.png" alt=""></center>
			<input type="text" name="email" value="" placeholder="Ingrese usuario" required>
			<div height=10px>
			<input type="password" name="password" value="" placeholder="Ingrese contraseña" required>
		</div>
		<HR width="100%" height=10%>
			<button class="btn" type="submit" name="button" >Ingresar</button>
		</form>
			<button type="button" name="button" onclick="location.href='{{route('index')}}'">Volver</button>


	</div>


</body>
</html>
