<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<!-- Agregar bulma.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bulma.min.css'); ?>">
</head>
<body>

	<section class="hero is-link">
		<div class="hero-body">
			<p class="title">Arreglos en PHP</p>
			<p class="subtitle">Edgar DeganteA</p>
		</div>
	</section>

	<section class="section is-medium">
		<h1 class="title">Días de la semana</h1>
		<h2 class="subtitle">
			<?php
				$semana = array("Domingo", "Lunes", "Martes", "Miércoles");

				foreach ($semana as $dia) {
					echo $dia . "<br />";
				}
			?>
		</h2>
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

