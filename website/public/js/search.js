const searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', function() {
	const filter = document.getElementById('search-filter').value;
	const value = document.getElementById('search-input').value;
	
	// Fetch the JSON response from your PHP script
	fetch('query.php', {
			method: "POST",
			headers: {
				"Content-Type": "application/x-www-form-urlencoded"
			},
			body: `filter=${encodeURIComponent(filter)}&value=${encodeURIComponent(value)}`
		})
		.then(response => response.json())
		.then(data => {
			console.log(data);

			data.forEach(user => {
				console.log(`User: ${user.name} (${user.email})`);
			});
		})
		.catch(error => console.error('Error fetching data:', error));

});
