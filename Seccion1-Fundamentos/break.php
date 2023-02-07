<?php

$paises = array(
	'Mexico', 'España', 'Colombia', 'Peru', 
	'Argentina', 'Venezuela', 'Guatemala'
);

 foreach($paises as $pais){

	echo $pais . '<br />';

	if($pais == 'España'){
		break;
	}

	
 }

 echo '<h1>Paises latinoamericanos</h1>';

 
 foreach($paises as $pais){

	if($pais == 'España'){
		continue;
	}

	//Con continue no llega aqui, pero no termina el bloque de codigo
	echo $pais . '<br />';

	
 }