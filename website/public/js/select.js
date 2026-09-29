const searchFilter = document.getElementById('search-filter');
const filterLabel = document.getElementById('search-label');
const inputContainer = document.getElementById('search-input-container');


searchFilter.addEventListener('change', function() {

	inputContainer.replaceChildren();

	filterLabel.style.display = 'none';
	inputContainer.style.display = 'none';


	switch (this.value) {

		case '0':
			break;
		case '1':
			filterLabel.textContent = 'Estudiante';

			const studentSelect = document.createElement('select');
			studentSelect.id = 'search-input';
			studentSelect.name = 'search-input';
			studentSelect.style.width = '100%';

			inputContainer.appendChild(studentSelect);

			break;
		case '2':
			filterLabel.textContent = 'Curso';

			const courseSelect = document.createElement('select');
			courseSelect.id = 'search-input';
			courseSelect.name = 'search-input';
			courseSelect.style.width = '100%';

			inputContainer.appendChild(courseSelect);

			break;
		case '3':
			filterLabel.textContent = 'Fecha';

			const dateInput = document.createElement('input');
			dateInput.type = 'date';
			dateInput.id = 'search-input';
			dateInput.name = 'search-input';

			inputContainer.appendChild(dateInput);

			break;
	}

	if (this.value != 0) {
		filterLabel.style.display = 'block';
		inputContainer.style.display = 'block';
	}
});