<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/common.css">
    <title>Sitra - Atrasos</title>
</head>
<body>
    
	<nav>
		<a href="index.php">Menú</a>
		<a href="newcard.php">Nueva Tarjeta</a>
	</nav>

	<header>
		<h2>REGISTRAR ATRASOS</h2>
	</header>

	<main>
		<form id="main-section" action="queries/insert-delay.php", method="POST">
			<h2>Nuevo atraso</h2>
			<p><br>Use la SofoCard para registrar el atraso automáticamente</p>
			<p>o</p>
			<p>Registre al estudiante de forma manual</p>
			<div>
				<label for="stu-id">Estudiante</label>
                <select name="stu-id" id="stu-select">
                    <!-- SAME AS IN SELECT.JS-->
                </select>
			</div>
			<button id="search-button" type="submit">Registrar</button>
		</form>
	</main>

	<footer>
		<p>Sitra &copy;2026. Por Esteban Bracamonte y Alonso Alfaro.</p>
		<p>Algunos derechos reservados.</p>
	</footer>

	<script src="js/delays.js"></script>
</body>
</html>