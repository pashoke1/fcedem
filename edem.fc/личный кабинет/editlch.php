<?php session_start(); 
if (isset($_SESSION['igr'])){
	

?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body id="bodygl">
	<a href="glavnaya.php"><button id="b1"></button></a>
<div id="d1">Футбольный клуб "Эдем"</div>
<?php
require("tablavt.php");
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
	<a href="lchkabinet.php" id="redlch" 
	>Отменить редактирование</a>
<?php
$id = $_SESSION['id'];
require('bd.php');
$query = "SELECT * FROM `igroki` where `id` = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $query1 = "SELECT `foto` FROM `igroki` where `id` = '$id'";
$result1 = mysqli_query($conn, $query1);
            $fi = $row['f.i.'];
			$koligr = $row['koligr'];
			$amp = $row['amplua'];
			$gols = $row['goals'];
			$golpas = $row['golpas'];
			$zhk = $row['zhk'];
			$kk = $row['kk'];
			$foto = $row['foto'];
			$dr = $row['dr'];
			$age = $row['age'];
			$biog = $row['biog'];
			$image = mysqli_fetch_array($result1)['foto'];
	echo "<img src='data:image/png;base64," . base64_encode($image) . "'  id = 'fotolch'/>";
	?>
	<form method="post" action="editlchotpr.php" enctype="multipart/form-data">
		<p>Добавить фото:<input type="file" name="foto"></p>
	<div style="margin-left: 50%; margin-top: -17%;">
		<?php
	echo "<p id='infalch'>Имя: <input type='text' name='imya' value='$fi'></p>";
	echo "<p id='infalch'>Возраст: <input type='text' name='age' value='$age'></p>";
	echo "<p id='infalch'>Дата Рождения: <input type='text' name='dr' value='$dr'></p>";
	?>
	<p id="infalch">Клуб:<img src="emblema3.png" style="height: 24px; top: 2px; position: relative;margin:0px 2px;">Эдем</p>
</div>

<?php

?>
	<div id="bioglch">Биография

	<textarea id="bioglch1" rows="10" name="biog"><?php echo $biog; ?></textarea>

	</div>
	<table id="tbls">
		<tr id="strtb"><td>Ф.И.О</td><td style="border-left:1px solid black;">Игры</td><td id="strtb">Голы</td><td id="krk"><img src="igroki/kk.png"></td><td id="zhk"><img src="igroki/zhk.png"></td></tr>
		<?php
		
		
    
		echo "<tr id='strtbr'><td id='strtbn1'>
			 <img src='data:image/png;base64," . base64_encode($image) . "'  id = 'igrph'/>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		
		?>
	</table>
	
		<input type="hidden" name="id" value=<?php echo "$id"; ?>>
		<input type="submit" name="Сохранить" value="Сохранить" style="margin-top: 3%; margin-left: 80%; height: 40px; width: 150px; font-size: 150%;"></form>
</div>
</body>
</html>
<?php
}else
{
	header('Location: /glavnaya.php');
}?>