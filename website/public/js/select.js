const searchFilter = document.getElementById('search-filter');
const filterLabel = document.getElementById('search-label');
const inputContainer = document.getElementById('search-input-container');

const classes = [
	[1,  "1°A"], [2,  "1°B"], [3,  "1°C"], [4,  "1°D"], [5,  "1°E"], [6,  "1°F"], 
	[7,  "2°A"], [8,  "2°B"], [9,  "2°C"], [10, "2°D"], [11, "2°E"], [12, "2°F"], 
	[13, "3°A"], [14, "3°B"], [15, "3°C"], [16, "3°D"], [17, "3°E"], [18, "3°F"], [19, "3°G"],
	[20, "4°A"], [21, "4°B"], [22, "4°C"], [23, "4°D"], [24, "4°E"], [25, "4°F"], [26, "4°G"]
]


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
			try {
			
				console.log("PARSED:");
				console.log(classes);
			
				classes.forEach(course => {
				
					const option = document.createElement("option");
				
					option.value = course[0];
					option.textContent = course[1];
				
					courseSelect.appendChild(option);
				});
			
			} catch (error) {
				console.error("JSON ERROR:", error);
			}
			
			fetch('queries/classes.php')
			.then(response => response.text())
			.then(data => {
			
				try {
					const classes = JSON.parse(data.replace(/^\uFEFF/, ''));
				
					console.log("PARSED:");
					console.log(classes);
				
					classes.forEach(course => {
					
						const option = document.createElement("option");
					
						option.value = course.cla_id;
						option.textContent = `${course.cla_year}°${course.cla_group}`;
					
						courseSelect.appendChild(option);
					});
				
				} catch (error) {
					console.error("JSON ERROR:", error);
				}
			})
			.catch(error => console.error('Fetch error:', error));

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