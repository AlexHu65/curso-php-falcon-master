<?php

function saludo(){

	echo 'Hola a todos';

}

echo saludo() . '<br>';

// Funciones con parametros
function saludo2($nombre){
	echo "Hola $nombre";
}

echo saludo2('Manuel Alejandro');


echo '<h1>Return</h1>';

function sumar($num, $num2){
	return $num + $num2;
}

$suma = sumar(10, 10);

echo $suma;