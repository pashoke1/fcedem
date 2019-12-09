<?php session_start(); 
$conn = mysqli_connect("localhost", "root", "", "edemfc");
    if(!$conn)
      die("conn err, ". mysqli_connect_error());

    $query = "SELECT * FROM `igry`";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igry`";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igry`";
    $result2 = mysqli_query($conn, $query2);?>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
<style type="text/css">
.tabs { width: 100%; padding: 0px; margin: 0 auto; }
.tabs>input { display: none; }
.tabs>div {
    display: none;
    padding: 12px;
    border: 0px solid #C0C0C0;

    background: #f5f7f7;
}
.tabs>label {
    display: inline-block;
    padding: 7px;
    margin: 0 -5px -1px 0;
    text-align: center;
    color: black;
    border: 1px solid #a3afc4;
    background: #a3afc4;
    cursor: pointer;
    transition: 0.4s;
    font-size: 95%;
    
}
.tabs>input:checked + label {
    color: #000000;
    border: 1px solid #C0C0C0;
    border-bottom: 1px solid #FFFFFF;
    background: #3377f2;
}
</style>
<style>#Раш2:checked ~ #Матч№228 { display: block; }</style>
<?php 
while ($row = mysqli_fetch_assoc($result)) {
 $idmatcha = $row['nomermatcha'];
  $sop = $row['sopernik'];
  echo "<style>#$sop:checked ~ #$idmatcha { display: block; } </style>";
}

?>
<style>#add:checked ~ #addmatch1 { display: block; } </style>
</head>
<body id="bodygl">
  <a href="glavnaya.php"><button id="b1"></button></a>
<div id="d1">Футбольный клуб "Эдем"</div>
<?php 
require("tablavt.php");
$conn = mysqli_connect("localhost", "root", "", "edemfc");
    if(!$conn)
      die("conn err, ". mysqli_connect_error());

    $query = "SELECT * FROM `igry`";
    $result = mysqli_query($conn, $query);
?>
<div id="sp1">
<ul id="ul1">
  <a href="1p.php" id="ast1"><li id="st1">Матчи</li></a>
  <a href="2p.php" id="ast1"><li id="st1">Статистика</li></a>
  <a href="3p.php" id="ast1"><li id="st1">Таблица</li></a>
  <a href="4p.php" id="ast1"><li id="st1">Игроки</li></a>
  <a href="5p.php" id="ast1"><li id="st1">Галерея</li></a>
  <a href="6p.php" id="ast1"><li id="st1">Контакты</li></a>
</ul>
</div>
<div id="cont1">
<div class="tabs">

  <?php
  while ($row1 = mysqli_fetch_assoc($result1)) {
$idmatcha = $row1['nomermatcha'];
  $sop = $row1['sopernik'];
    echo "<input type='radio' name='inset' id='$sop' checked>" ;
    echo "<label for='$sop'>$idmatcha</label>";
  }
  if ($_SESSION['admin']) {
   
  ?>

<input type='radio' name='inset' id='add' checked>
 <label for='add'>+добавить матч</label>
<?php
}
while($row2 = mysqli_fetch_assoc($result2))
  {
    $idmatcha = $row2['nomermatcha'];
    $schet = $row2['schet'];
    $fotka = $row2['fotosop'];
    $goly = $row2['goly'];
      $id = $row2['id_match'];
      $fotoob = $row2['fotoobzor'];
      $videoob = $row2['videoobzor'];
    echo "<div id='$idmatcha'>";
  echo "<h3>$idmatcha</h3>";
  echo "<img src='emblema3.png' id='me1'>";
  echo "<div id='sch1'>$schet</div>";
  echo "<img src='$fotka' id='kv1'>";
  echo "<br> <br>";

  echo "<div id='goli'>Голы:$goly</div>";
  if ($fotoob != null) {
    echo "<a id='fotom' href='$fotoob'>Фотообзор матча<br><img src='foto.png' id='fotomp'></a><br>";
  }
  if ($videoob != null) {
    echo "<iframe width='400' height='250' src='$videoob' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if($_SESSION['admin'] ) { 
     ?>
    <form action="dellmatch.php" method="POST">
      <input type="hidden" name="id" value=<?php echo "\"".$id."\""; ?>>
      <input type="submit" value="Удалить матч">
    </form>
<?php }
  require('comm.php');

echo "</div>";
  }
  if ($_SESSION['admin']) {

?>
<div id='addmatch1'>
  <form method="post" action="addmatch.php">
  <p>Номер матча:<input type="text" name="№matcha" placeholder="Пример: Матч№2"></p>
  
  <P><input type="text" name="schetvvod" placeholder="Счет"></P>
  <p><input type="text" name="sopernik" placeholder="Команда соперника"></p>
  <input type="file" name="fotosopernika">
  <p>Голы:<input type="text" name="golyigr" placeholder="Пример: <br>Иванов<br>Соловьев" style="width: 30%;"></p>
  <P><input type="text" name="fotoobzoradd" placeholder="Ссылка на фотообзор"></P>
  <p><input type="text" name="videoobzoradd" placeholder="Ссылка на видеообзор Пример:https://www.youtube.com/embed/rE1drBvulTU" style="width: 55%;"></p>
  <input type="submit" name="Добавить">
</form>
</div>
<?php
}

?>
</div>

</div>
</body>
</html>