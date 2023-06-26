<?php

$validation = null;
$nombre = '';
$email = '';

if(isset($_POST['submit'])){

	$validation = valida($_POST);

	if($validation['success']){
		$validation['msg'] = 'Datos enviados correctamente';
	}

	$nombre = sanitiza($_POST['nombre']);
	$email = sanitiza($_POST['email']);
	$mensaje = sanitiza($_POST['mensaje']);

}

function sanitiza($char){
	$char = filter_var(trim($char), FILTER_SANITIZE_STRING);
	$char = stripslashes($char);
	return $char;
}

function valida($input): array{
	
	$errores = '';
	
	$valid = true;

	if(empty($input['nombre'])){
		$errores .= '<b>Favor de ingresar el nombre.</b><br>';
		$valid = false;
	}

	if(empty($input['email'])){
		$errores .= '<b>Favor de ingresar el email.</b><br>';
		$valid = false;
	}else{
		if (!filter_var($input['email'], FILTER_VALIDATE_EMAIL)){
			$errores .= '<b>Por favor ingresa un correo valido.</b>';
			$valid = false;
		}
	}

	if(empty($input['mensaje'])){
		$errores .= '<b>Favor de ingresar un mensaje.</b><br>';
		$valid = false;
	}

	return [ 'success' => $valid , 'msg' => $errores];

}

include('./views/index.view.php');