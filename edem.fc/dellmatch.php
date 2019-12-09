<?php 
session_start();

if($_SESSION["admin"])
{
$conn = mysqli_connect("127.0.0.1", "root", "", "edemfc");
	if(!$conn)
		die("conn err, ".mysqli_connect_error());
	$id = $_POST["id"];
	$query = "DELETE FROM `igry` WHERE `id_match` = '$id'";
	mysqli_query($conn, $query);
	$page = $_SERVER['HTTP_REFERER'];
	header("Location:$page");
}
?>