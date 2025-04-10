<?php

$host = "localhost";
$user = "root";
$pass = "password";
$db   = "blog";

$conn = mysqli_connect($host, $user, $pass);
mysqli_select_db($conn, $db);
