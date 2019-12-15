<?php 
session_start(); 
if(isset($_SESSION['username']))
{
	require('bd.php');
	$nomermatcha = $_POST["№matcha"];
	$shet = $_POST["schetvvod"];
	$sopernik = $_POST["sopernik"];
	$goli = $_POST["golyigr"];
	$obzorf = $_POST["fotoobzoradd"];
	$obzorv = $_POST["videoobzoradd"];
	$image = addslashes(file_get_contents($_FILES['fotosopernika']['tmp_name']));


	$query = "INSERT INTO `igry`(`nomermatcha`,`schet`,`sopernik`,`fotosop`,`goly`,`fotoobzor`,`videoobzor`) 
	VALUES('$nomermatcha','$shet','$sopernik','$image','$goli','$obzorf','$obzorv')";
	
	mysqli_query($conn, $query);
	mysqli_close($conn);
	
	header('Refresh:0; url="1p.php"');
}
else
{
	header('Refresh:2; url="glavnaya.php"');
	echo "Yout don't have administrator rights!";
}

?>