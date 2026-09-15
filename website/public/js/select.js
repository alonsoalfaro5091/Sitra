const searchFilter = document.getElementById('search-filter');
const filterLabel = document.getElementById('filter-label');
const filterInput = document.getElementById('filter-input');

const optionInput = [

]

searchFilter.addEventListener('change', function() {
	console.log("Changed to:", this.value);
	option = searchFilter.value;
	filterLabel.style.display = 'block';
	filterInput.style.display = 'block';

	switch(this.value) {
		case '0':
			filterLabel.style.display = 'none';
			filterInput.style.display = 'none';
			break;
		case '1':
			filterLabel.textContent = 'Estudiante';
			filterInput.type = 'text';
			filterInput.value = '';
			filterInput.disabled = false;
			filterInput.placeholder = 'Nombre del estudiante';
			break;
		case '2':
			filterLabel.textContent = 'Curso';
			filterInput.type = 'text';
			filterInput.value = '';
			filterInput.disabled = false;
			filterInput.placeholder = 'Nombre del curso';
			break;
		case '3':
			filterLabel.textContent = 'Fecha';
			filterInput.type = 'date';
			filterInput.value = '';
			filterInput.disabled = false;
			break;
	}
});