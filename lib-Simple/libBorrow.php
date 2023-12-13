<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Book Borrowing</title>
</head>
<body>
    <div class="container">
    <?php
    session_start();

    if (isset($_COOKIE["logged_in_user"])) {
        echo "<h2>Book Borrowing Page</h2>";
        echo "<p>Welcome, {$_COOKIE['logged_in_user']}! You can borrow books here.</p>";
        echo "<a href='index.php?action=sign_out'>Sign Out</a>";
    } 
    else echo "<p>Please sign in to borrow books. <a href='index.php'>Sign In</a></p>";
    ?>
    </div>
</body>
</html>
