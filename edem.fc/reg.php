<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$conn = mysqli_connect("127.0.0.1","root","","edemfc");
if(!$conn)
{
	die("conn error ". mysqli_connect_error());
} else{
	$otpravuser = $_POST['username'];
	$oprpol = $_POST['name_pol'];
$query = "SELECT * FROM `users` where `username` = '$otpravuser'";
$result = mysqli_query($conn, $query);
$query1 = "SELECT * FROM `igroki` where `username` = '$otpravuser'";
$result1 = mysqli_query($conn, $query1);
$query2 = "SELECT * FROM `superusers` where `login` = '$otpravuser'";
$result2 = mysqli_query($conn, $query2);
$queryp = "SELECT * FROM `users` where `name_pol` = '$oprpol'";
$resultp = mysqli_query($conn, $queryp);
$queryp1 = "SELECT * FROM `igroki` where `f.i.` = '$oprpol'";
$resultp1 = mysqli_query($conn, $queryp1);
$queryp2 = "SELECT * FROM `superusers` where `Имя фамилия` = '$oprpol'";
$resultp2 = mysqli_query($conn, $queryp2);
$username_exists = false;
$info_is_valid = true;
$rowname = $row['name_pol'];
$namepol = $_POST['name_pol'];
$username = $_POST['username'];
$row = mysqli_fetch_assoc($result);
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
$rowp = mysqli_fetch_assoc($resultp);
$rowp1 = mysqli_fetch_assoc($resultp1);
$rowp2 = mysqli_fetch_assoc($resultp2);
$prish = $row['username'];
$prishp = $rowp['name_pol'];
$prish1 = $row1['username'];
$prishp1 = $rowp1['f.i.'];
$prish2 = $row2['login'];
$prishp2 = $rowp2['Имя фамилия'];
if ($prish == null && $prish1 == null && $prish2 == null) {
if ($prishp == null && $prishp1 == null && $prishp2 == null) {
	if ($_POST['username'] != NULL &&
strlen($_POST['username']) >= 4 &&
preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["username"]) ) {
		echo "Логин принят<br>";
	} else {
		echo "Проверьте правильность ввода<br>";
		$info_is_valid = false;
	}
	if ($_POST["password"] != NULL &&
 	($_POST["password"] == $_POST["password_r"]))
{
    echo "Пароль принят<br>";
}
else
{
	echo "Проверьте правильноть ввода или такой пользователь уже существует.<br>";
	$info_is_valid = false;
}
if ($_POST['name_pol'] != NULL &&
preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["name_pol"]) &&
 	($username_exists == false)) {
	} else {
		echo "Проверьте правильность ввода<br>";
		$info_is_valid = false;
	}
if($info_is_valid == true) 
{
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$name_pol = $_POST['name_pol'];
	$query1 = "INSERT INTO `users`(`username`, `password`, `name_pol`) 
			  VALUES ('$username','$pass', '$name_pol')";
	mysqli_query($conn, $query1);
	echo "Регистрация прошла успешно!";
	?>
	<br>
	<a href="glavnaya.php" id = "ar2">Вернуться к главной странице</a>
<?php
}
else
{
	echo "Что то пошло не так!";
?>
	<br>
	<a href="glavnaya.php" id = "ar2">Вернуться к главной странице</a>
<?php
}
mysqli_close($conn);
die(mysqli_connect_error());
}
else {echo "Имя пользователя занято";}
}else {echo "Пользователь с таким логином уже существует";}
}
?>