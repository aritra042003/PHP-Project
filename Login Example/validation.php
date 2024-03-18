<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root', '', 'loginDB'); // Add the password and the database name


$q = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['username'] = $username;
    header('location: http://localhost/Login Example/Home.php');
} else {
    header('location: http://localhost/Login Example/login.php');
}
