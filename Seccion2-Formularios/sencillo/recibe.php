<?php

if(!$_POST){
	return header('Location: http://localhost/curso-php-falcon-master/Seccion2-Formularios/');
}

$data = $_POST;
echo '<pre>';
print_r($data);
echo '</pre>';