<?php
session_start();
$conn = mysqli_connect("localhost","root","","edemfc");
if(!$conn)
	die("conn error ". mysqli_connect_error());
mysqli_query($conn, "SELECT * FROM `users`");
$pass = $_POST['password'];
$username = $_POST['username'];
$otpr = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$pass'";

$result = mysqli_query($conn, $otpr);

$row = mysqli_fetch_assoc($result);



if($row['username'] != NULL)
{
	
		echo "zahod";
		$vhod = true;

}
else
{
	echo "Incorrect username or password";?>
	<br>
	<p><a href="glavnaya.php">Попробуй еще раз</a> или <a href="regform.php">зарегиструйся.</a></p>
	<?php 
}


mysqli_close($conn);

?>