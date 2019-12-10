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

while ($row = mysqli_fetch_assoc($result)){
	if ($row['username'] == $_POST['username'] 
        
) {
		$username_exists = true;
	}
	

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
if($info_is_valid == true) 
{
	$username = $_POST['username'];
	$pass = $_POST['password'];


	$query1 = "INSERT INTO `igroki`(`username`, `password`) 
			  VALUES ('$username','$pass')";

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
}

mysqli_close($conn);
die(mysqli_connect_error());
}

?>

</body>
</html>