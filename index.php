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
        <h1>User Registration and Login System</h1>
        <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" name="register" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
    <div class="background">
        <img src="background.jpg" alt="Background Image">
    </div>
</body>
</html>