<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>E-Lib</title>
</head>
<body>
    <div class="container">
    <?php
    session_start();

    class User{
        private $username;
        private $password;

        public function __construct($username, $password){
            $this->username = $username;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }

        public function getUsername(){  //get username
            return $this->username;
        }

        public function verifyPassword($enteredPassword){ //verify passwd, kalo udh set passwordny dgn yg d masukkin
            return password_verify($enteredPassword, $this->password);
        }
    }

    function signUp($user) {
        // Retrieve users from session or initialize an empty array
        $users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

        // Add the new user
        $users[] = $user;

        // Store the updated users array in the session
        $_SESSION['users'] = $users;

        echo "User signed up: {$user->getUsername()}\n";
    }

    function signIn($username, $password) {
        // Retrieve users from session or initialize an empty array
        $users = isset($_SESSION['users']) ? $_SESSION['users'] : [];

        foreach ($users as $user) {
            if ($user->getUsername() === $username) {
                if ($user->verifyPassword($password)) {
                    setcookie("logged_in_user", $username, time() + 3600); // Set cookie to expire in 1 hour
                    echo "User signed in: {$user->getUsername()}\n";
                    header("Location: libBorrow.php"); // Redirect to library web pagge
                    exit;
                } else {
                    echo "Invalid password for user: {$username}\n";
                    return false;
                }
            }
        }

        echo "User not found: {$username}\n";
        return false;
    }

    function signOut() {
        if (isset($_COOKIE["logged_in_user"])) {
            setcookie("logged_in_user", "", time() - 3600); // Set cookie to expire in 1 hour
            session_destroy(); // Destroy the session
        }
        header("Location: index.php"); // Redirect to the main page (index.php)
        exit;
    }
    

    $users = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);

        if (isset($_POST["action"]) && $_POST["action"] === "sign_up") signUp(new User($username, $password));
        else if (isset($_POST["action"]) && $_POST["action"] === "sign_in") signIn($username, $password);
        else if (isset($_POST["action"]) && $_POST["action"] === "sign_out") signOut();
    }

    if (isset($_COOKIE["logged_in_user"])) {
        echo "Welcome back, {$_COOKIE['logged_in_user']}";
        echo " | <a href='index.php?action=sign_out'>Sign Out</a>";
        echo " | <a href='libBorrow.php'>Borrow a Book</a>";
    } else {
        echo "<h2>Sign In</h2>";

        echo "<form action='' method='post'>";
        echo "<input type='text' name='username' placeholder='Username' required>";
        echo "<input type='password' name='password' placeholder='Password' required>";
        echo "<input type='hidden' name='action' value='sign_in'>";
        echo "<input type='submit' value='Sign In'>";
        echo "</form>";

        echo "<h2>Sign Up</h2>";

        echo "<form action='' method='post'>";
        echo "<input type='text' name='username' placeholder='Username' required>";
        echo "<input type='password' name='password' placeholder='Password' required>";
        echo "<input type='hidden' name='action' value='sign_up'>";
        echo "<input type='submit' value='Sign Up'>";
        echo "</form>";
    }
    ?>
    </div>
</body>
</html>
