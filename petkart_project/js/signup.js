

<script src="js/signup.js"></script>

function validateLoginForm() {
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	if (email == "" || password == "") {
		document.getElementById("loginerrorMsg").innerHTML = "Please fill the required fields";
		return false;
	}
	else if (!(emailPattern.test(email))) {
		document.getElementById("loginemailerrorMsg").innerHTML = "Invalid email pattern";
		return false;
	}
	
	else {
		document.getElementById("loginemailerrorMsg").innerHTML = "";
		document.getElementById("loginerrorMsg").innerHTML = "";
		$('#Modal1').modal('show');
		return true;
	}
}

// Selecting HTML elements
const form = document.querySelector('form');
const emailInput = document.querySelector('email');
const passwordInput = document.querySelector('password');
const confirmPasswordInput = document.querySelector('#confirm_password');

// Adding event listener to form submission
form.addEventListener('submit', (event) => {
  // Preventing default form submission behavior
  event.preventDefault();

  // Retrieving input values and trimming whitespace
  const emailValue = emailInput.value.trim();
  const passwordValue = passwordInput.value.trim();
  const confirmPasswordValue = confirmPasswordInput.value.trim();

  // Validating email address
  if (!validateEmail(emailValue)) {
    alert('Please enter a valid email address.');
    return;
  }

  // Validating password
  if (passwordValue.length < 8) {
    alert('Password must be at least 8 characters long.');
    return;
  }

  // Validating confirm password
  if (passwordValue !== confirmPasswordValue) {
    alert('Passwords do not match.');
    return;
  }

  // If all validations pass, submit the form
  form.submit();
});

// Function to validate email address format
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}
