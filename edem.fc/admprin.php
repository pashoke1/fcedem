<?php session_start();  
if ($_SESSION['admin'] == true) {


?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<h1>Добавление игроков</h1>
<?php
require('bd.php');

$query = "SELECT * FROM `prin`";

$result_set = $conn->query("SELECT * FROM `prin`");





while ($row = $result_set->fetch_assoc()) {
  print_r($row);
  
  ?>
 
<?php
  echo "<hr />";
}
?>
<form method="post">
  <p>ID принять:<input type="int" name="da" style="width: 2%;"></p>
  <p>ID удалить:<input type="int" name="net" style="width: 2%;"></p>
  <input type="submit" name="">
</form>
<hr>
<h1>Управление игроками</h1>
<?php
     $query = "SELECT `id`,`name_pol`,`ban` FROM `users`";

$result = mysqli_query($conn, $query);






while ($row = mysqli_fetch_assoc($result)) {
  print_r($row);
  }
  ?>
  <form method="post">
  <p>ID заблокировать:<input type="int" name="ban" style="width: 2%;"></p>
  <p>ID разблокировать:<input type="int" name="razban" style="width: 2%;"></p>
  <input type="submit" name="">
</form>
<?php

        if ($_POST['da'] != null) {
           $idv = $_POST['da'];
           $result_set1 = $conn->query("SELECT * FROM `prin` WHERE `id` = '$idv'");
           $row12 = mysqli_fetch_assoc($result_set1);
           $login1 = $row12['login'];
           $password1 = $row12['password'];
           $fi1 = $row12['Ф.И.'];
                     $query1 = "INSERT INTO `igroki` (`username`, `password`, `f.i.`)
          VALUES ('$login1', '$password1', '$fi1')";

          mysqli_query($conn, $query1);

          $query3 = "DELETE FROM `prin` WHERE `prin`.`id` = '$idv'";

          $result2 = mysqli_query($conn, $query3);


            

           
       }
       if ($_POST['net'] != null) {
           $idn = $_POST['net'];
           
        $query2 = "DELETE FROM `prin` WHERE `prin`.`id` = '$idn'";
        $result2 = mysqli_query($conn, $query2);
        
       }
       if ($_POST['ban'] != null) {
           $idb = $_POST['da'];
           $queryb = "UPDATE `users` SET `ban` = 1 WHERE `users`.`id` = '$idb'";      
       }
       if ($_POST['net'] != null) {
           $idr = $_POST['net'];
           
       $queryr = "UPDATE `users` SET `ban` = 0 WHERE `users`.`id` = '$idb'";
        $resultr = mysqli_query($conn, $queryr);
        
       }
       ?>
       <?php
mysqli_close($conn);
        die(mysqli_connect_error());
        ?>
</body>
</html>
<?php
}else{
    header('Location: /glavnaya.php');
}