<?php


for ($i = 1; $i <= 10; $i++) { 

	echo 'Hola ' . $i . '<br>';

}

echo '<h1> En 5 en 5 </h1>'; 


for ($i = 0; $i <= 10; $i += 5) { 

	echo 'Hola ' . $i . '<br>';

}

echo '<h1> En decremento </h1>'; 


for ($i=10; $i >= 1 ; $i--) { 
	echo 'Hola ' . $i . '<br>';
}

echo '<h1>Ciclo while</h1>';

$contador = 1;

while ($contador <= 10) {

	echo 'Hola ' . $contador . '<br>';
	$contador++;

}

echo '<h1>Inverso con while</h1>';

$contador2 = 10;

while ($contador2 >= 1) {

	echo 'Hola ' . $contador2 . '<br>';
	$contador2--;

}

echo '<h1>Recorrer arreglos con ciclos</h1>';

$array = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre','Noviembre', 'Diciembre'];

for ($i = 0; $i < count($array); $i++) { 
	echo 'Hola mes: ' . $array[$i] . '<br>';
}


echo '<h1>Recorrer arreglos con ciclos: While</h1>';

$contM = 0;

while ($contM < count($array)) {
	echo 'Hola mes: ' . $array[$contM] . '<br>';
	$contM++;
}
