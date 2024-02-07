function togglePasswordVisibility1() {
	var passwordField = document.getElementById("passwordField1");
	var eyeIcon = document.getElementById("eyeIcon1");

	if (passwordField.type === "password") {
		passwordField.type = "text";
		eyeIcon.classList.remove("fa-eye");
		eyeIcon.classList.add("fa-eye-slash");
	} else {
		passwordField.type = "password";
		eyeIcon.classList.remove("fa-eye-slash");
		eyeIcon.classList.add("fa-eye");
	}
}

function togglePasswordVisibility2() {
	var passwordField = document.getElementById("passwordField2");
	var eyeIcon = document.getElementById("eyeIcon2");

	if (passwordField.type === "password") {
		passwordField.type = "text";
		eyeIcon.classList.remove("fa-eye");
		eyeIcon.classList.add("fa-eye-slash");
	} else {
		passwordField.type = "password";
		eyeIcon.classList.remove("fa-eye-slash");
		eyeIcon.classList.add("fa-eye");
	}
}

function togglePasswordVisibility() {
	var passwordField = document.getElementById("passwordField");
	var eyeIcon = document.getElementById("eyeIcon");

	if (passwordField.type === "password") {
		passwordField.type = "text";
		eyeIcon.classList.remove("fa-eye");
		eyeIcon.classList.add("fa-eye-slash");
	} else {
		passwordField.type = "password";
		eyeIcon.classList.remove("fa-eye-slash");
		eyeIcon.classList.add("fa-eye");
	}
}

document.addEventListener("DOMContentLoaded", function () {
	const steps = document.querySelectorAll(".step");

	function updateProgress() {
		let currentStep = 0;

		setInterval(() => {
			steps.forEach((step) => {
				step.classList.remove("active");
			});

			if (currentStep < steps.length) {
				steps[currentStep].classList.add("active");
				currentStep++;
			} else {
				clearInterval();
			}
		}, 2000); // Adjust the duration as needed (in milliseconds)
	}

	updateProgress(); // Start the progress update
});

document.addEventListener("DOMContentLoaded", function () {
	const input = document.querySelector("#phone");
	window.intlTelInput(input, {
		utilsScript:
			"https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
	});

	const iti = window.intlTelInput(input, {
		utilsScript:
			"https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
		initialCountry: "ng", // "ng" is the ISO country code for Nigeria
	});
});

document.addEventListener("DOMContentLoaded", function () {
	// Fetch countries from the Restcountries API
	fetch("https://restcountries.com/v3.1/all")
		.then((response) => response.json())
		.then((data) => {
			// Get the select element
			const countrySelect = document.getElementById("country");

			// Populate the dropdown with countries
			data.forEach((country) => {
				const option = document.createElement("option");
				option.value = country.name.common;
				option.textContent = country.name.common;
				countrySelect.appendChild(option);
			});
		})
		.catch((error) => console.error("Error fetching countries:", error));
});
