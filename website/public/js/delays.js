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


// Post button behavior
const form = document.getElementById('main-section');
const popup = document.getElementById('confirmation-popup');
const confirmButton = document.getElementById('confirm-submit');
const cancelButton = document.getElementById('cancel-submit');

form.addEventListener('submit', function(event) {
	event.preventDefault();
	popup.style.display = 'flex';
});

confirmButton.addEventListener("click", function() {
	popup.style.display = "none";
	form.submit();
});

cancelButton.addEventListener("click", function() {
	popup.style.display = "none";
});