<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "edemfc");
if(!$conn)
	{die("conn err, ". mysqli_connect_error());}
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `igroki` where `username` = '$username' and `password` = '$password'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$otprid = "SELECT * FROM `igroki` WHERE `username` = '$username' ";
$resultid = mysqli_query($conn, $otprid);
$rowid = mysqli_fetch_assoc($resultid);
$id = $rowid['id'];
$otprf = "SELECT * FROM `foto` WHERE `id` = '$id'";
$resultfoto = mysqli_query($conn, $otprf);
$rowfoto = mysqli_fetch_assoc($resultfoto);

$info_is_valid = false;


if(($row['username'] == $username) && 
		($row['password'] == $password)){
		$info_is_valid = true;	

}
if($info_is_valid == true)
{
	session_start();
	$_SESSION["foto"] = $rowfoto['img'];
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["surname"] = $row['surname'];
	$_SESSION["name"] = $row['name'];

	header('Location: /glavnaya.php');
}
else
{
	header('Refresh:2; url = "regform.php"');
	echo 'You entered wrong username or password';
	echo $row['username'];
}
?>
