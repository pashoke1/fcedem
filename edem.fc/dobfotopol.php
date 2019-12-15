<?php
session_start();
require('bd.php');
if ($_FILES['ava']['tmp_name'] != null) {

	$id = $_SESSION['id'];

$image = addslashes(file_get_contents($_FILES['ava']['tmp_name']));
$query = "
UPDATE `users` SET `foto` = '$image' WHERE `users`.`id` = '$id'
";
$result = mysqli_query($conn, $query);

mysqli_close($conn);

	$page = $_SERVER['HTTP_REFERER'];
	header("Location:$page");
}else{
	$page = $_SERVER['HTTP_REFERER'];
	header("Location:$page");
}


?>