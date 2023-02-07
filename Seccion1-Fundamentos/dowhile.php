<?php

$i = 1;

do {

	//Inctrucciones
	echo $i . '<br>';
	$i ++;

} while ($i <= 10);

echo '<h1> Ciclo for each </h1>';

$array = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre','Noviembre', 'Diciembre'];


foreach ($array as $key => $value) {
	echo 'Hola mes: ' , $value . '<br>';
}