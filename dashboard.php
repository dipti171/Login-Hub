<?php
session_start();
?>
<?php
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Display the dashboard
echo 'Welcome, ' . $_SESSION['username'] . '!';

// Add any other dashboard content here
?>