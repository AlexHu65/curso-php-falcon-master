<?php

// Esta parte del codigo es para configurar los tipos estrictos para php 8
declare(strict_types=1);
function cuadrado(int $numero){
	return $numero * $numero;
}

$numero = 8;
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);