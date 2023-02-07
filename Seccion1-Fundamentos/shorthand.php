<?php

//Isset significa que busca si la variable esta seteada o no
$edad = 18;
$edad = (isset($edad)) ? $edad :  'El usuario no establecio su edad';

echo $edad;