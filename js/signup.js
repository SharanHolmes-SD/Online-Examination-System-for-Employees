//signup

// Get the form elements
const form = document.querySelector('form');
const firstnameInput = document.querySelector('input[name="firstname"]');
const middlenameInput = document.querySelector('input[name="middlename"]');
const lastnameInput = document.querySelector('input[name="lastname"]');
const birthdateInput = document.querySelector('input[name="birthdate"]');
const usernameInput = document.querySelector('input[name="username"]');
const passwordInput = document.querySelector('input[name="password"]');
const pswRepeatInput = document.querySelector('input[name="psw-repeat"]');

// Add event listener to the form submission
form.addEventListener('submit', function(event) {
  event.preventDefault();

  // Validate the form input
  if (!validateForm()) {
    return;
  }

  // Submit the form
  form.submit();
});

// Validate the form input
function validateForm() {
  let isValid = true;

  // Validate firstname
  if (firstnameInput.value.trim() === '') {
    alert('Please enter your first name');
    isValid = false;
  }

  // Validate middlename
  if (middlenameInput.value.trim() === '') {
    alert('Please enter your middle name');
    isValid = false;
  }

  // Validate lastname
  if (lastnameInput.value.trim() === '') {
    alert('Please enter your last name');
    isValid = false;
  }

  // Validate birthdate
  if (birthdateInput.value === '') {
    alert('Please enter your birthdate');
    isValid = false;
  }

  // Validate username
  if (usernameInput.value.trim() === '') {
    alert('Please enter a username');
    isValid = false;
  }

  // Validate password
  if (passwordInput.value.trim() === '') {
    alert('Please enter a password');
    isValid = false;
  }

  // Validate repeat password
  if (pswRepeatInput.value.trim()!== passwordInput.value.trim()) {
    alert('Passwords do not match');
    isValid = false;
  }

  return isValid;
}