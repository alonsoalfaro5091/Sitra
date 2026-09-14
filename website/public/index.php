<?php 
$rows = [
	[42, '14-Sep-2026, 23:47', 'Alfonsio Alforo', '1°H'],
	[43, '14-Sep-2026, 23:48', 'Alonsel Pizarro', '1°I']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Sitra - Inicio</title>
</head>
<body>
	<nav>
		<a>Registros</a>
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
				<label for="filter-input" id="filter-label">Null</label>
				<input type="text" name="filter-input" id="filter-input">
			</div>
			<button>Buscar</button>
		</section>

		<h2>Resultados de la búsqueda</h2>
		<section id="anotation-results">
			<h3>ID</h3>
			<h3>Fecha y hora</h3>
			<h3>Nombre del estudiante</h3>
			<h3>Curso del estudiante</h3>
			<?php foreach ($rows as $row) { ?>
			<p> <?= htmlspecialchars($row[0]) ?> </p>
			<p> <?= htmlspecialchars($row[1]) ?> </p>
			<p> <?= htmlspecialchars($row[2]) ?> </p>
			<p> <?= htmlspecialchars($row[3]) ?> </p>
			<?php } ?>
		</section>
	</main>

	<footer>
		<p>Sitra &copy;2026.</p>
		<p>Ningún derecho reservado.</p>
	</footer>

	<script src="js/select.js"></script>
</body>
</html>