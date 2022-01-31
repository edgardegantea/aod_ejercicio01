<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<!-- Agregar bulma.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>">
</head>
<body>

	<section class="hero is-link">
		<div class="hero-body">
			<p class="title">Formulario en PHP</p>
			<p class="subtitle">Edgar DeganteA</p>
		</div>
	</section>

	<section class="section">

		<div class="columns">
			
			<div class="column"></div>

			<div class="column is-three-fifths">
				<form action="procesar.php" method="post">
					<div>
						<label>Nombre:</label>
						<input class="input is-primary" type="text" name="nombre">
					</div>

					<div>
						<label>Apellido Paterno:</label>
						<input class="input is-primary" type="text" name="apat">
					</div>
					
					<div>
						<label>Apellido Materno:</label>
						<input class="input is-primary" type="text" name="amat">
					</div>
					
					<div>
						<label>Correo electrónico:</label>
						<input class="input is-primary" type="email" name="email">
					</div>
					
					<div>
						<input type="submit" class="button is-link" value="Guardar">
					</div>

				</form>
			</div>

			<div class="column"></div>

		</div>

		


	</section>

	<footer class="footer">
		<div class="content has-text-centered">
			<p>
				<strong>Developed by EdgaDeganteA</strong>
				<a href="mapaches.info">mapaches.info</a>. 
			</p>
		</div>
	</footer>

</body>
</html>

