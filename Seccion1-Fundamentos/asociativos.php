<?php

//No son arreglos indexado, son arreglos asociativos
$persona = [
	'telefono' => 4778651262,
	'nombre' => 'Manuel Alejandro Chavez Nuñez',
	'edad' => 32,
	'pais' => 'México'
];

echo '<br/>';

print_r($persona);

echo '<br/>';

echo 'Edad:' . $persona['edad'];