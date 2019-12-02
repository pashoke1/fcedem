<?php session_start(); 

?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<?php
$conn = mysqli_connect("127.0.0.1","root","","edemfc");
if(!$conn)
{
	die("conn error ". mysqli_connect_error());
} else{

$query = "SELECT * FROM `prin`";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$login = $row['login'];
$password = $row['password'];
$rpass = $row['r.password'];
$fi = $row['Ф.И.'];
$req = require('podtdannie.php');
while () {
	echo $req;
}
	
}

?>
</body>
</html>