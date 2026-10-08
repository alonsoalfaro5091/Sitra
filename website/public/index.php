<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Sitra - Buscador</title>
</head>
<body>
	<nav>
		<a href="newcard.php">Nueva Tarjeta</a>
		<a href="anotations.php">Registrar anotaciones</a>
		<a>Documentación</a>
	</nav>

	<header>
		<h1>SITRA</h1>
	</header>

	<main>
		<section id="searcher">
			<h2>Buscar atrasos</h2>
			<div>
				<label for="search-filter">Filtro de búsqueda</label>
				<select name="search-filter" id="search-filter">
					<option value="0">Sin filtro</option>
					<option value="1">Por estudiante</option>
					<option value="2">Por curso</option>
					<option value="3">Por fecha</option>
				</select>
				<label id="search-label"></label>
				<div id="search-input-container">
				</div>
			</div>
			<button id="search-button">Buscar</button>
		</section>

		<h2>Resultados de la búsqueda</h2>
		<section id="anotation-results">
			<h3>ID</h3>
			<h3>Fecha</h3>
			<h3>Hora</h3>
			<h3>Nombre del estudiante</h3>
			<h3>Curso</h3>
			<div id="results-container"></div>
		</section>
	</main>

	<footer>
		<p>Sitra &copy;2026.</p>
		<p>Ningún derecho reservado.</p>
	</footer>

	<script src="js/search.js"></script>
	<script src="js/select.js"></script>
</body>
</html>