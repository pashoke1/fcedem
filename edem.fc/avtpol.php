<?php
require('bd.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `users` where `username` = '$username' and `password` = '$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$idpol = $row['id'];
$otprf1 = "SELECT `foto` FROM `users` WHERE `id` = '$idpol'";
$resultfoto1 = mysqli_query($conn, $otprf1);
$rowfoto = mysqli_fetch_assoc($resultfoto1);

$otv = $rowfoto['foto'];

			if ($otv == null) {
				$foto1 = "<img src = 'anon.png' id = 'fotopol'>";
			}else{
			 $foto1 = '<img src="data:image/jpg;base64,' . base64_encode($otv) . '"  id = "fotopol" />';
			 $foto2 = '<img src="data:image/jpg;base64,' . base64_encode($otv) . '" style="height:20px; width:15px;" />';
			}

$info_is_valid = false;