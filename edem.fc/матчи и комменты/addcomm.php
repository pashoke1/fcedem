<?php 
session_start(); 
if(isset($_SESSION['username']))
{
	require('bd.php');
	$id = $_POST["id"];
	$username = $_POST["username"];
	$text = $_POST["text"];
	$date = date('H:i d,M o');
	if($text != null)
	{
		$query = "INSERT INTO `comments`(`match_id`, `username`, `text`,`pubdate`) 
		VALUES('$id','$username','$text','$date')";
		mysqli_query($conn, $query);
	}
	mysqli_close($conn);
	//$page = $_SERVER['HTTP_REFERER'];
	header("Location: 1p.php");
}
else
{
	$page = $_SERVER['HTTP_REFERER'];
	header("Refresh:2; url=$page");
	echo "Yout don't have administrator rights!";
}

?>