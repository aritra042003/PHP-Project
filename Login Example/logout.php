<?php
session_start();
session_destroy();
header('location:http://localhost/Login%20Example/login.php');
?>