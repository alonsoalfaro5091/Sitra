const studentSelect = document.getElementById('stu-select');

fetch('queries/fetch-students.php')
.then(response => response.text())
.then(data => {

	try {
		const students = JSON.parse(data.replace(/^\uFEFF/, ''));
	
		console.log("PARSED STUDENTS:");
		console.log(students);
	
		students.forEach(student => {
		
			const option = document.createElement("option");
		
			option.value = student.stu_id;
			option.textContent = `${student.stu_names} ${student.stu_surnames}`;
		
			studentSelect.appendChild(option);
		});
	
	} catch (error) {
		console.error("JSON ERROR:", error);
	}
})
.catch(error => console.error('Fetch error:', error));

searchButton = document.getElementById('search-button');

searchButton.addEventListener('click', () => {
	
});