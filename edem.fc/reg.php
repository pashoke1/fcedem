<?php session_start(); ?>
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
mysqli_query($conn, "SELECT * FROM `users`");
$query = "SELECT * FROM `users`";
$result = mysqli_query($conn, $query);
$username_exists = false;
$info_is_valid = true;
$rowname = $row['name_pol'];
$namepol = $_POST['name_pol'];
$username = $_POST['username'];
$row = mysqli_fetch_assoc($result);
$prish = $row['username'];
if ($username != $prish or $namepol != $rowname) {$username_exists = false;}
	if ($_POST['username'] != NULL &&
strlen($_POST['username']) >= 4 &&
preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["username"]) &&
 	($username_exists == false)) {
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
?>