<?php
$username = $_POST['username'];
$password = $_POST['password'];
$query2 = "SELECT * FROM `igroki` where `username` = '$username' and `password` = '$password'";
$result2 = mysqli_query($conn, $query2);
$rowi = mysqli_fetch_assoc($result2);
$otprid = "SELECT * FROM `igroki` WHERE `username` = '$username' ";
$resultid = mysqli_query($conn, $otprid);
$rowid = mysqli_fetch_assoc($resultid);
$id = $rowid['id'];
$otprf = "SELECT * FROM `foto` WHERE `id` = '$id'";
$resultfoto = mysqli_query($conn, $otprf);
$rowfoto = mysqli_fetch_assoc($resultfoto);

$igr = false;


