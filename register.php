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
        <h1>Dashboard</h1>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div class="background">
        <img src="background.jpg" alt="Background Image">
    </div>
</body>
</html>