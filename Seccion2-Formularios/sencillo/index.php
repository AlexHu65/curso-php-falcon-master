

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formularios - Practica</title>
</head>
<body>
	<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<br>
		<label for="hombre">Hombre</label>
		<input type="radio" id="hombre" name="sexo" value="H">
		<br>
		<label for="mujer">Mujer</label>
		<input type="radio" id="mujer" name="sexo" value="M">
		<br>
		<br>
		<select name="year" id="year">
			<?php 
				$currentYear = date('Y');		
				$sinceYear = ( $currentYear - 35);
					
				for ($sinceYear; $sinceYear <= $currentYear; $sinceYear++) {  ?>
					<option value="2000"><?=$sinceYear?></option>
			<?php } ?>
		</select>
		<br>
		<br>
		<label for="terminos">Aceptas los terminos y condiciones</label>
		<input type="checkbox" name="terminos" id="terminos" value="true">
		<br>
		<br>
		<button type="submit">Enviar</button>
	</form>
</body>
<!-- Para recuperar los formularios de manera facil con js -->
<!--<script>
	document.querySelector('form')
	.addEventListener('submit', e => {
		e.preventDefault();
		const data = Object.fromEntries(
			new FormData(e.target)
		);

		console.log('Data', data);
	});
</script>-->

<script>

	/*function hash(x) {
		seed = 41;
		diccionario = "abefimoprstuv";
		for(i = 0; i < x.length; i++) {
			// 41 * 19 + 7 
			seed = (seed * 19 + diccionario.indexOf(x[i]));
		}
		return seed;
	}

	console.log(hash("alejandro"));

	function decrypt(hash){	

		diccionario = "abefimoprstuv";
		longitud = 10;
		inicio = 0;
		seed = 41;
		finalizar = 10000000;

		hash = (x, diccionario, seed) => {

			diccionario = "abefimoprstuv";

			for(i = 0; i < x.length; i++) {
				// 41 * 19 + 7 
				seed = (seed * 19 + diccionario.indexOf(x[i]));
			}
			return seed;
		}

		for (let i = inicio; i < finalizar; i++) {
			
			// 1 . Generamos un string a buscar con array from
			// 2. le damos la longitud deseada en 10 que es la longitud de la palabra
			// 3. llamamos una funcion para obtener la primera letra del diccionario
			// 4. con math floor obtenemos la base del indice entre la longitud del diccionario y obtenemos el resto con % para el indice del diccionario a usar

			let combinacion = Array.from(
				{length: longitud}, (k,j) => diccionario[Math.floor(i / Math.pow(diccionario.length, j)) % diccionario.length])
				.join("");
			
				console.log('Combinacion', combinacion);

				//5 . Pasamos la combinacion obtenida para evaluarla
	
				let hashDeCombinacion = hash(combinacion, diccionario, seed);
	
				if (hashDeCombinacion === hash) {
					console.log(`Se encontro combinacion: ${combinacion}`);
					break;
				}
			}
		}
	
		decrypt(253674078499881);*/

</script>

</html>