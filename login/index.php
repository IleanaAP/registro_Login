<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="bg-light">
	<div class="container">
		<header class="blog-header py-3">
			<div class="row flex-nowrap justify-content between align-items-center">
				<div class="col-4 pt-1">
					<a class="text-muted" href="portafolio.html">Portafolio</a>
				</div>
				<div class="col-4 text-center">
					<a class="blog-header-logo text-dark" href="#" id="inicio">Ileana Aguilar</a>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a class="btn btn-sm btn-outline-secondary" href="registrarse.php">Sign up</a>
				</div>
			</div>
		</header>
	<div>

	<div class="container contenedor2">
		<div class="col">
			<h1>Iniciar sesión</h1>
			<i class="fas fa-user-circle fa-5x icono"></i>
			<form action="controller_login.php" method="post" name="FormEntrar">
				<div class="form-group">
					<label for="iNombreUsuario">Nombre de usuario</label>
					<input type="text" class="form-control" id="iNombreUsuario" name="usuario" aria-describedby="iNombreUsuario">
				</div>
				<div class="form-group">
					<label for="iClaveUsuario">Contraseña</label>
					<input type="password" class="form-control" id="iClaveUsuario" name="pas">
				</div>
				<input type="hidden" name="entrar" value="entrar">
				<button type="submit" class="btn btn-primary is">Iniciar Sesión</button>
				<div class="aviso">Si aún no tienes una cuenta: <a href="registrarse.php">Regístrate</a>.</div>
			</form>
		</div>
	</div>

	<hr class="featurette-divider">

	<footer class="container">
		<p>© Ileana Aguilar 2020</p>
	</footer>
</body>
</html>