<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/styles.css">
	<title>Formulario de contacto | Falcon Masters</title>
</head>
<body>
	<div class="wrap">
		<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
			<input type="text" name="nombre" id="nombre" value="<?=($validation !== null && !$validation['success'] ? $nombre : '')?>" placeholder="Nombre:">
			<input type="email" name="email" id="email" value="<?=($validation !== null && !$validation['success'] ? $email : '')?>" placeholder="Email: ">
			<textarea name="mensaje" id="mensaje"></textarea>

			<?php if($validation !== null): ?>
				<div class="alert <?=$validation['success'] ? 'success' : 'error';?> show">
					<?=$validation['msg'];?>
				</div>
			<?php endif; ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
		</form>
	</div>
</body>
</html>