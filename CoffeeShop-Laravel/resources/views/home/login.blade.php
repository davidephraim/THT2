<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="loginHome.css">
  <title>Login/Register Page</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form name="registerForm">
            <!-- Registration form -->
            <h1>Create Account</h1>
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <button type="button" onclick="handleSignUp()">Sign Up</button>
          </form>
        </div>
        <div class="form-container sign-in-container">
          <form name="loginForm">
            <!-- Login form -->
            <h1>Sign in</h1>
            <input type="text" name="username" placeholder="Username" />
            <input type="password" name="password" placeholder="Password" />
            <a href="#">Forgot your password?</a>
            <button type="button" onclick="handleSignIn()">Sign In</button>
          </form>
        </div>
    </div>    
  <script src="scriptHome.js"></script>
</body>
</html>
