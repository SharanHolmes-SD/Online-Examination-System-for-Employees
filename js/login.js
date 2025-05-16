//login

const form = document.querySelector('form');
const usernameInput = document.getElementById('username');
const passwordInput = document.getElementById('password');


function handleSubmit(event) {
    event.preventDefault();
    
    // Retrieve username and password values
    const username = usernameInput.value.trim();
    const password = passwordInput.value.trim();
    
    // Perform validation 
    if (username === '' || password === '') {
        alert('Please fill in all fields.');
        return;
    }
    
    console.log('Username:', username);
    console.log('Password:', password);
    
  }
form.addEventListener('submit', handleSubmit);





