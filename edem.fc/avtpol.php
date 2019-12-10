<?php
require('bd.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `users` where `username` = '$username' and `password` = '$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$info_is_valid = false;