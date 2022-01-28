<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sign up</title>

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
					<a class="btn btn-sm btn-outline-secondary" href="index.php">Sign in</a>
				</div>
			</div>
		</header>
	<div>


	<div class="container contenedor1" style="margin-top: 5%;">
		<div class="col">
			<h1>Registro en línea</h1>
			<form class="needs-validation" novalidate action="controller_login.php" method="post">
				<div class="form-group">
					<label for="rNombreUsuario">Nombre de usuario</label>
					<input type="text" class="form-control" id="rNombreUsuario" name="usuario" aria-describedby="rNombreUsuario" required>
					<div class="invalid-feedback">Por favor escriba un usuario</div>
				</div>
				<div class="form-group">
					<label for="rClaveUsuario">Contraseña</label>
					<input type="password" class="form-control" id="rClaveUsuario" name="pas" aria-describedby="rNombreUsuario" required>
					<div class="invalid-feedback">Por favor escriba una contraseña</div>
				</div>
				<input type="hidden" name="registrarse" value="registrarse">
				<button type="submit" class="btn btn-primary btn-block">Registrarse</button>
			</form>
		</div>
	</div>

	<hr class="featurette-divider">

	<footer class="container">
		<p>© Ileana Aguilar 2020</p>
	</footer>

	<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
  		'use strict';
  		window.addEventListener('load', function() {
    		// Fetch all the forms we want to apply custom Bootstrap validation styles to
    		var forms = document.getElementsByClassName('needs-validation');
    		// Loop over them and prevent submission
    		var validation = Array.prototype.filter.call(forms, function(form) {
      			form.addEventListener('submit', function(event) {
        			if (form.checkValidity() === false) {
          				event.preventDefault();
          				event.stopPropagation();
        			}
        			form.classList.add('was-validated');
      			}, false);
    		});
  			}, false);
	})();
	</script>

</body>
</html>