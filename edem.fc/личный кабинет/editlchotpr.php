<?php session_start(); 
if (isset($_SESSION['igr'])) {
	$name = $_SESSION['name'];
	require('bd.php');
$id = $_POST['id'];
$imay = $_POST['imya'];
$age = $_POST['age'];
$dr = $_POST['dr'];
$biog = $_POST['biog'];
$image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
$query = "UPDATE `igroki` SET `f.i.` = '$imay' WHERE `igroki`.`id` = '$id' ";
		mysqli_query($conn, $query);
		$query1 = "UPDATE `igroki` SET `age` = '$age' WHERE `igroki`.`id` = '$id' ";
		mysqli_query($conn, $query1);
		$query2 = "UPDATE `igroki` SET `dr` = '$dr' WHERE `igroki`.`id` = '$id' ";
		mysqli_query($conn, $query2);
		$query3 = "UPDATE `igroki` SET `biog` = '$biog' WHERE `igroki`.`id` = '$id' ";
		mysqli_query($conn, $query3);
		$query4 = "UPDATE `igroki` SET `foto` = '$image' WHERE `igroki`.`id` = '$id' ";
		mysqli_query($conn, $query4);
				mysqli_close($conn);
	header("Location: /lchkabinet.php");
}
else
{
	$page = $_SERVER['HTTP_REFERER'];
	header("Refresh:2; url=$page");
	echo "Yout don't have administrator rights!";
}

?>