<?php 
session_start();

if($_SESSION["admin"])
{
require('bd.php');
	$id = $_POST["id"];
	$query = "DELETE FROM `igry` WHERE `id_match` = '$id'";
	mysqli_query($conn, $query);
	$page = $_SERVER['HTTP_REFERER'];
	header("Location:$page");
}
?>