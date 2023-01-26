<?php 


$meses = [
	'Enero', 
	'Febrero', 
	'Marzo', 
	'Abril', 
	'Mayo', 
	'Junio', 
	'Julio',
	'Agosto', 
	'Septiembre', 
	'Octubre',
	'Noviembre', 
	'Diciembre'
];


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Meses del año</title>
</head>
<body>
	<h1>Meses del año</h1>
	<ul>
		<?php 
			foreach ($meses as $key => $mes) {
				echo  '<li>' . $mes . '</li>';
			}
		?>
	</ul>
</body>
</html>