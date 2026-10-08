<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
    <title>Sitra - Anotar</title>
</head>
<body>
    
	<nav>
		<a href="newcard.php">Nueva Tarjeta</a>
		<a>Documentación</a>
	</nav>

	<header>
		<h2>REGISTRAR ATRASOS</h2>
	</header>

	<main>
		<section id="searcher">
			<h2>Buscar atrasos</h2>
			<div>
				<label for="stu-id">Estudiante</label>
                <select name="stu-id" id="stu-id">
                    <!-- SAME AS IN SELECT.JS-->
                </select>
                <input id="stu-id" type="int">
			</div>
			<button id="search-button">Buscar</button>
		</section>
	</main>

	<footer>
		<p>Sitra &copy;2026.</p>
		<p>Ningún derecho reservado.</p>
	</footer>
</body>
</html>