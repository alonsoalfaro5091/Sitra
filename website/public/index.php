<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/common.css">
	<title>Sitra</title>
</head>
<body>
	<nav>
		<button>Inicio</button>
		<button>Registros</button>
		<button>Documentación</button>
	</nav>

	<header>
		<h1 style="color: var(--peach)">Sitra</h1>
	</header>

	<main>
		<form id="anotation-filter" action="/submit-data" method="POST">
			<h2>Buscar anotaciones</h2>
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
			<div id="anotation-id"></div>
			<div id="anotation-date"></div>
			<div id="anotation-name"></div>
			<div id="anotation-class"></div>
			<div id="anotation-date"></div>
		</section>
	</main>

	<footer>
		<p>Sitra &copy;2026.</p>
		<p>Ningún derecho reservado.</p>
	</footer>
</body>
</html>