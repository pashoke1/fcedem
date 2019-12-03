<?php
require("avtpol.php");
require("avtigroki.php");
require("avtadm.php");
if ($username == null &&
$password == null) {
	header('Location: /glavnaya.php');
}else{
if(($row['username'] == $username) && 
		($row['password'] == $password)){
		$info_is_valid = true;	
	session_start();
	$_SESSION["username"] = $username;
	$_SESSION["pol"] = true;
	$_SESSION["name_pol"] = $row["name_pol"];
	
	header('Location: /glavnaya.php');

} else {echo "";}
if (($rowi['username'] == $username) && 
		($rowi['password'] == $password)) {
	$igr = true;
	session_start();
	$_SESSION["foto"] = $rowfoto['img'];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["name"] = $rowi['f.i.'];
	$_SESSION["igr"] = true;
	$_SESSION["lch"] = "<a href='regform.php' id='ar1'>Личный кабинет</a>";
	$_SESSION["vihod"] = "<a href='vihod.php' id='ar1'>Выход</a>";
	header('Location: /glavnaya.php');
} else {echo "";}
if (($rowia['login'] == $username) && 
		($rowia['password'] == $password)) {
	$admin == true;
	session_start();
	$_SESSION["fotoa"] = $rowfotoa['img'];
	$_SESSION["username"] = $username;
	$_SESSION["name"] = $rowia['Имя фамилия'];
	$_SESSION["admin"] = true;
	$_SESSION['prin'] = "<a href='admprin.php' id='ar1'>Подтверждения</a>";
	$_SESSION["lch"] = "<a href='regform.php' id='ar1'>Личный кабинет</a>";
	$_SESSION["vihod"] = "<a href='vihod.php' id='ar1'>Выход</a>";
	
	header('Location: /glavnaya.php');
} 

if ($info_is_valid != true && $igr != true && $admin != true) {
	header('Refresh:2; url = "regform.php"');
	echo 'You entered wrong username or password';
}
}
