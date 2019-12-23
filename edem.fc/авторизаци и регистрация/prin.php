<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
require('bd.php');
mysqli_query($conn, "SELECT * FROM `igroki`");
$query = "SELECT * FROM `igroki`";
$result = mysqli_query($conn, $query);
$username_exists = false;
$info_is_valid = true;
$username = $_POST['login'];
$row = mysqli_fetch_assoc($result);
$prish = $row['username'];
if ($username != $prish) {$username_exists = false;}
	if ($_POST['login'] != NULL &&
strlen($_POST['login']) >= 4 &&
preg_match("!^[a-zA-Z][a-zA-Z0-9_]*$!", $_POST["login"]) &&
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
if ($_POST['fi'] != NULL &&
 	($username_exists == false)) {
	} else {
		echo "Проверьте правильность ввода<br>";
		$info_is_valid = false;
	}
if($info_is_valid == true) 
{
	$username = $_POST['login'];
	$pass = $_POST['password'];
	$fi = $_POST['fi'];
	$query1 = "INSERT INTO `prin`(`Ф.И.`, `password`, `login`) 
			  VALUES ('$fi','$pass', '$username')";
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

?>