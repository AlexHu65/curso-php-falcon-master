<?php

$valido = false;

$errores = '';

if(isset($_POST['submit'])){
	$errores = validar($_POST);
}

function sanitiza($char){
	return filter_var($char, FILTER_SANITIZE_STRING);
}

function validar($input){

	$errores = '';

	if(empty($input['nombre'])){
		$errores .= '<b>Favor de ingresar el nombre.</b>';
	}

	if(empty($input['email'])){
		$errores .= '<br><b>Favor de ingresar el email.</b>';
	}else{
		if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)){
			$errores .= '<br><b>Por favor ingresa un correo valido.</b>';
		}
	}

	if(empty($input['password'])){
		$errores .= '<br><b>Favor de ingresar el password.</b>';
	}

	if(!isset($input['terminos'])){
		$errores .= '<br><b>Acepta los términos y condiciones.</b>';
	}

	return $errores;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de formularios</title>
	<link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	<main>
		<section class="pt-3 pb-3">
			<div class="container">
				<h1>Validación de formulario</h1>
				<div class="row">
					<div class="col-sm-12">
					<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
						<?php if(!empty($errores)): ?> 
							<div class="alert alert-danger" role="alert">
								<?=$errores?>
							</div>
						<?php endif; ?>
						<div class="form-group pt-2">
							<label for="email">Email</label>
							<input autocomplete="false" type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
						</div>
						<div class="form-group pt-2">
							<label for="nombre">Nombre</label>
							<input  autocomplete="false" type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombreHelp">
						</div>
						<div class="form-group pt-2">
							<label for="password">Password</label>
							<input  autocomplete="false" type="password" class="form-control" name="password" id="password">
						</div>
						<div class="form-group form-check pt-2">
							<input type="checkbox" class="form-check-input" name="terminos" id="terminos">
							<label class="form-check-label" for="terminos">Acepto términos y condiciones</label>
						</div>
						<input type="submit" name="submit" class="btn btn-primary mt-2"></input>
					</form>
					</div>
				</div>
			</div>
		</section>

	</main>
</body>
</html>