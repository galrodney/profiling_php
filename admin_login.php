<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM admins WHERE username='$username' AND password='$password'");

    if ($result->num_rows > 0) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: crud.php");
    } else {
        echo "Invalid credentials";
    }
}
?>
