<?php

$edad = $_GET['edad'];

if($edad >= 18){
	//Instrucciones si la condicion se cumple
	echo 'Es mayor de edad <h1>Bienvenido</h1>';

}elseif($edad < 18){
	echo '<h1>Es menor de edad</h1>';
}