<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration and Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <p>Don't have an account? <a href="index.php">Register</a></p>
    </div>
    <div class="background">
        <img src="background.jpg" alt="Background Image">
    </div>
</body>
</html>