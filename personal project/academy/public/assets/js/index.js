// function togglePasswordVisibility1() {
// 	var passwordField = document.getElementById("passwordField1");
// 	var eyeIcon = document.getElementById("eyeIcon1");
//
// 	if (passwordField.type === "password") {
// 		passwordField.type = "text";
// 		eyeIcon.classList.remove("fa-eye");
// 		eyeIcon.classList.add("fa-eye-slash");
// 	} else {
// 		passwordField.type = "password";
// 		eyeIcon.classList.remove("fa-eye-slash");
// 		eyeIcon.classList.add("fa-eye");
// 	}
// }
//
// function togglePasswordVisibility2() {
// 	var passwordField = document.getElementById("passwordField2");
// 	var eyeIcon = document.getElementById("eyeIcon2");
//
// 	if (passwordField.type === "password") {
// 		passwordField.type = "text";
// 		eyeIcon.classList.remove("fa-eye");
// 		eyeIcon.classList.add("fa-eye-slash");
// 	} else {
// 		passwordField.type = "password";
// 		eyeIcon.classList.remove("fa-eye-slash");
// 		eyeIcon.classList.add("fa-eye");
// 	}
// }
//
// function togglePasswordVisibility() {
// 	var passwordField = document.getElementById("passwordField");
// 	var eyeIcon = document.getElementById("eyeIcon");
//
// 	if (passwordField.type === "password") {
// 		passwordField.type = "text";
// 		eyeIcon.classList.remove("fa-eye");
// 		eyeIcon.classList.add("fa-eye-slash");
// 	} else {
// 		passwordField.type = "password";
// 		eyeIcon.classList.remove("fa-eye-slash");
// 		eyeIcon.classList.add("fa-eye");
// 	}
// }
//
// document.addEventListener("DOMContentLoaded", function () {
// 	const steps = document.querySelectorAll(".step");
//
// 	function updateProgress() {
// 		let currentStep = 0;
//
// 		setInterval(() => {
// 			steps.forEach((step) => {
// 				step.classList.remove("active");
// 			});
//
// 			if (currentStep < steps.length) {
// 				steps[currentStep].classList.add("active");
// 				currentStep++;
// 			} else {
// 				clearInterval();
// 			}
// 		}, 2000); // Adjust the duration as needed (in milliseconds)
// 	}
//
// 	updateProgress(); // Start the progress update
// });
//
// document.addEventListener("DOMContentLoaded", function () {
// 	const input = document.querySelector("#phone");
// 	window.intlTelInput(input, {
// 		utilsScript:
// 			"https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
// 	});
// 	const iti = window.intlTelInput(input, {
// 		utilsScript:
// 			"https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
// 		initialCountry: "ng", // "ng" is the ISO country code for Nigeria
// 	});
// });
//
// document.addEventListener("DOMContentLoaded", function () {
// 	// Fetch countries from the Restcountries API
// 	fetch("https://restcountries.com/v3.1/all")
// 		.then((response) => response.json())
// 		.then((data) => {
// 			// Get the select element
// 			const countrySelect = document.getElementById("country");
// 			// Populate the dropdown with countries
// 			data.forEach((country) => {
// 				const option = document.createElement("option");
// 				option.value = country.name.common;
// 				option.textContent = country.name.common;
// 				countrySelect.appendChild(option);
// 			});
// 		})
// 		.catch((error) => console.error("Error fetching countries:", error));
// });
//
//
// $(".place-container").slick({
//     infinite: false,
//     speed: 300,
//     slidesToShow: 4,
//     slidesToScroll: 3,
//     infinite: true,
//     responsive: [
//         {
//             breakpoint: 1200,
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 3,
//                 infinite: true,
//             },
//         },
//         {
//             breakpoint: 900,
//             settings: {
//                 slidesToShow: 2,
//                 slidesToScroll: 2,
//             },
//         },
//         {
//             breakpoint: 700,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//             },
//         },],
// });
//
// const header = document.querySelector(".nav-section");
// const elements = document.querySelector(".nav-list");
// const menu = document.querySelectorAll(".nav-link");
// const sublink = document.querySelectorAll('.sublink')
// const icon = document.querySelector("#menu-icon i");
// const consultBtn = document.querySelector('.login')
//
//
// menu.forEach((element) => {
//     element.addEventListener("click", () => {
//         elements.classList.toggle("active");
//         icon.classList.toggle("active");
//     });
// });
// sublink.forEach((element) => {
//     element.addEventListener("click", () => {
//         elements.classList.toggle("active");
//         icon.classList.toggle("active");
//     });
// });
// consultBtn.addEventListener('click', (e) => {
//     e.preventDefault()
//     elements.classList.toggle("active");
//     icon.classList.toggle("active");
// })
//
// let searchBox = document.querySelector(".search-box .fa-solid.fa-magnifying-glass");
// let search = document.querySelector('.nav-profile')
// console.log(searchBox)
// searchBox.addEventListener("click", () => {
//     search.classList.toggle("showInput");
//     if (search.classList.contains("showInput")) {
//         searchBox.classList.replace("fa-solid.fa-magnifying-glass", "fa-solid.fa-xmark");
//     } else {
//         searchBox.classList.replace("fa-solid.fa-xmark", "fa-solid.fa-magnifying-glass");
//     }
// });
//
// const switchBtn = document.querySelector('.home-btn')
// const see = document.getElementById("see");
// const start = document.getElementById("start");
// const homeText = document.querySelector(".home-text");
// const stepItem = document.querySelector(".step-item");
//
// switchBtn.addEventListener("click", function () {
//     if (event.target.id === "see")
//         event.preventDefault();
//
//     homeText.style.display = "none";
//     stepItem.style.display = "block";
//     start.style.display = 'inline-block';
//     see.style.display = 'none'
// });
//
// document.getElementById('toggleSubMenu').addEventListener('click', function () {
//     document.querySelector('.submenu').classList.toggle('active');
//     if (window.matchMedia("(max-width: 75em)").matches) {
//         elements.style.paddingTop = '70px';
//     } else {
//         elements.style.paddingTop = '0';
//     }
// });
//
// const exploreBtn = document.querySelector('.place-explore')
// const con = document.querySelector('.place-con')
//
// exploreBtn.addEventListener('click', function (e) {
//     e.preventDefault()
//     con.classList.remove('place-hide')
//     exploreBtn.style.display = 'none'
// })
//
// var swiper = new Swiper(".mySwiper", {
//     spaceBetween: 30,
//     centeredSlides: true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });
//
// document.addEventListener("DOMContentLoaded", function () {
//     // Fetch countries from the Restcountries API
//     fetch("https://restcountries.com/v3.1/all")
//         .then((response) => response.json())
//         .then((data) => {
//             // Get the select element
//             const countrySelect = document.getElementById("country");
//
//             // Populate the dropdown with countries
//             data.forEach((country) => {
//                 const option = document.createElement("option");
//                 option.value = country.name.common;
//                 option.textContent = country.name.common;
//                 countrySelect.appendChild(option);
//             });
//         })
//         .catch((error) => console.error("Error fetching countries:", error));
// });
//
// const input = document.querySelector("#phone");
// window.intlTelInput(input, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
// });
//
// const iti = window.intlTelInput(input, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
//     initialCountry: "ng", // "ng" is the ISO country code for Nigeria
// });
// const input2 = document.querySelector("#phone2");
// window.intlTelInput(input2, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
// });
//
// const iti2 = window.intlTelInput(input2, {
//     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
//     initialCountry: "ng", // "ng" is the ISO country code for Nigeria
// });
//
// // CONSULTATION LOGIC
// const consult = document.getElementById('consult')
// const closeConsult = document.querySelector('.consult-link')
// consultBtn.addEventListener('click', (e) => {
//     e.preventDefault()
//     consult.classList.toggle('active');
// })
//
// closeConsult.addEventListener('click', (e) => {
//     e.preventDefault()
//     consult.classList.toggle('active')
// })
//
// // REGISTER LOGIC
// const registerBtn = document.getElementById('registered')
// const registerBox = document.getElementById('register')
// const closeReg = document.querySelector('.reg-link')
// const regLogin = document.querySelector('.reg-login')
// const loginReg = document.querySelector('.login-reg')
// const getStarted = document.querySelectorAll('.login2')
// registerBtn.addEventListener('click', (e) => {
//     e.preventDefault()
//     registerBox.classList.toggle('active');
// })
// closeReg.addEventListener('click', (e) => {
//     e.preventDefault()
//     registerBox.classList.toggle('active');
// })
// //LOGIN LOGIC
// const loginBtn = document.getElementById('logged')
// const loginBox = document.getElementById('login')
// const closeLogin = document.querySelector('.login-link')
// loginBtn.addEventListener('click', (e) => {
//     e.preventDefault()
//     loginBox.classList.toggle('active');
// })
// closeLogin.addEventListener('click', (e) => {
//     e.preventDefault()
//     loginBox.classList.toggle('active');
// })
//
// regLogin.addEventListener('click', (e) => {
//     e.preventDefault()
//     registerBox.classList.toggle('active');
//     loginBox.classList.toggle('active');
// })
// loginReg.addEventListener('click', (e) => {
//     e.preventDefault()
//     registerBox.classList.toggle('active');
//     loginBox.classList.toggle('active');
// })
// // getStarted.addEventListener('click', (e) => {
// //   e.preventDefault()
// //   registerBox.classList.toggle('active');
// // })
// getStarted.forEach((get) => {
//     get.addEventListener('click', (e) => {
//         e.preventDefault()
//         registerBox.classList.toggle('active');
//     })
// })
//
//
//
