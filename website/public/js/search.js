const searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', function() {
	const filter = document.getElementById('search-filter').value;
	const value = document.getElementById('search-input').value;
	
	// Fetch the JSON response from your PHP script
	fetch('queries/query.php', {
			method: "POST",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded"
			},
			body: `filter=${encodeURIComponent(filter)}&value=${encodeURIComponent(value)}`
		})
		.then(response => response.json())
		.then(data => {
			console.log(data);
			
			const resultsContainer = document.getElementById('anotation-results');
			resultsContainer.replaceChildren(
				...resultsContainer.querySelectorAll('h3')
			);

			data.forEach(row => {
				const id = document.createElement('p');
				const date = document.createElement('p');
				const time = document.createElement('p');
				const student = document.createElement('p');
				const course = document.createElement('p');
			
				id.textContent = row.del_id;
				date.textContent = row.del_date;
				time.textContent = row.del_time;
				student.textContent = row.stu_fullname;
				course.textContent = row.cla_name;
			
				resultsContainer.appendChild(id);
				resultsContainer.appendChild(date);
				resultsContainer.appendChild(time);
				resultsContainer.appendChild(student);
				resultsContainer.appendChild(course);
			});
		})
		.catch(error => console.error('Error fetching data:', error));

});
