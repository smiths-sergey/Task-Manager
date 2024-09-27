<?php
session_start();


$valid_username = 'user';
$valid_password = 'pass';


$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === $valid_username && $password === $valid_password) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "Welcome, " . htmlspecialchars($username) . "!";
} else {

    echo "Invalid username or password.";
}
?>