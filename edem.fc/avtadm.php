<?php
$username = $_POST['username'];
$password = $_POST['password'];
$query3 = "SELECT * FROM `superusers` where `login` = '$username' and `password` = '$password'";
$result3 = mysqli_query($conn, $query3);
$rowia = mysqli_fetch_assoc($result3);
$otprida = "SELECT * FROM `superusers` WHERE `login` = '$username' ";
$resultida = mysqli_query($conn, $otprida);
$rowida = mysqli_fetch_assoc($resultida);
$ida = $rowid['id'];

$otprfa = "SELECT * FROM `foto` WHERE `id` = '$ida'";
$resultfotoa = mysqli_query($conn, $otprfa);
$rowfotoa = mysqli_fetch_assoc($resultfotoa);

$adm = false;