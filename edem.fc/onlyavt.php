<?php

$conn = mysqli_connect("localhost","root","","edemfc");
if(!$conn)
	die("conn error ". mysqli_connect_error());
$pass = $_POST['password'];
$username = $_POST['username'];
$otpr = "SELECT * FROM `igroki`";


$result = mysqli_query($conn, $otpr);

$row = mysqli_fetch_assoc($result);

$user = $rowid['username'];

$otprid = "SELECT * FROM `igroki` WHERE `username` = '$username' ";

$resultid = mysqli_query($conn, $otprid);

$rowid = mysqli_fetch_assoc($resultid);

$id = $rowid['id'];

$user = $rowid['username'];

$usern = $rowid['name'];

$userser = $rowid['surname'];

$_SESSION['username'] = $rowid['username'];

$otprf = "SELECT * FROM `foto` WHERE `id` = '$id'";

$resultfoto = mysqli_query($conn, $otprf);

$rowfoto = mysqli_fetch_assoc($resultfoto);

//header("Content-type: image/png");

$foto = $rowfoto['img'];

?>