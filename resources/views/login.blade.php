<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="login">
		<form class="" action="{{route('login')}}" method="post">
			@csrf
			<center><img src="images/talentopiscologo.png" alt=""></center>
			<input type="text" name="email" value="" placeholder="Ingrese usuario" required>
			<input type="password" name="password" value="" placeholder="Ingrese contraseña" required>
			<button class="btn" type="submit" name="button" >Ingresar</button>

		</form>
	</div>


</body>
</html>
