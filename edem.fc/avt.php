<?php
require("avtpol.php");
require("avtigroki.php");
if(($row['username'] == $username) && 
		($row['password'] == $password)){
		$info_is_valid = true;	
	session_start();
	$_SESSION["username"] = $username;
	$_SESSION["pol"] = true;
	$_SESSION["name_pol"] = $row["name_pol"];
	
	header('Location: /glavnaya.php');

}elseif (($rowi['username'] == $username) && 
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
}else {
	header('Refresh:2; url = "regform.php"');
	echo 'You entered wrong username or password';
}

