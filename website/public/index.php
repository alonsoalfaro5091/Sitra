<?php 
$rows = [
	[42, '14-Sep-2026, 23:47', 'Alfonsio Alforo', '1°H'],
	[43, '14-Sep-2026, 23:48', 'Algen Pizarro', '1°H']
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
		<a>Inicio</a>
		<a>Registros</a>
		<a>Documentación</a>
	</nav>

	<header>
		<h1>SITRA</h1>
	</header>

	<main>
		<form id="anotation-filter" action="/submit-data" method="POST">
			<h2>Buscar atrasos</h2>
			<div>
				<label for="search-filter">Filtro de búsqueda</label>
				<select name="search-filter" id="search-filter">
					<option value="student">Sin filtro</option>
					<option value="student">Por estudiante</option>
					<option value="class">Por curso</option>
					<option value="date">Por fecha</option>
				</select>
			</div>
			<button type="submit">Filtrar</button>
		</form>

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
</body>
</html>