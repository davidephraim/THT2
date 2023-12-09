let users = [];

function handleSignUp() {
  const registerForm = document.forms['registerForm'];
  const username = registerForm.elements['username'].value;
  const password = registerForm.elements['password'].value;

  users.push({username, password});

  showSuccessMessage();
}

function handleSignIn() {
  const loginForm = document.forms['loginForm'];
  const username = loginForm.elements['username'].value;
  const password = loginForm.elements['password'].value;

  const user = users.find(u => u.username === username && u.password === password);

  if (user) alert('Login Success!');
  else alert('Invalid username or password. Please try again.');

}