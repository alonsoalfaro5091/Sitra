<?php 
$rows = [
	[42, '14-Sep-2026', '23:47', 'Alfonsio Alforo', '1°H'],
	[43, '14-Sep-2026', '23:48', 'Alongel Pizarro', '1°I']
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/common.css">
	<title>Sitra - Inicio</title>
</head>
<body>
	<nav>
		<a href="index.php">Menú</a>
		<a href="delays.php">Registrar atrasos</a>
	</nav>

	<header>
		<h2>REGISTRAR SOFOCARD</h2>
	</header>

	<main>
		<section id="main-section">
			<h2>Nueva SofoCard</h2>
			<p><br>Coloque la nueva SofoCard en el sensor para vincularla.</p>
			<div>
				<label for="stu-id">Estudiante</label>
                <select name="stu-id" id="stu-select">
                    <!-- SAME AS IN SELECT.JS-->
                </select>
			</div>
			<button id="search-button">Registrar</button>
		</section>
	</main>

	<footer>
		<p>Sitra &copy;2026. Por Esteban Bracamonte y Alonso Alfaro.</p>
		<p>Algunos derechos reservados.</p>
	</footer>

	<script src="js/getStudents.js"></script>
</body>
</html>