<?php session_start(); ?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body id="bodygl">
	<a href="glavnaya.php"><button id="b1"></button></a>
<div id="d1"><?php require('slayder.html');?></div>
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
	<h1 id="hg3">Статистика игроков "Эдем"</h1>
	<table id="tbls">
	<form method="post">
		<p id="sor">Сортировать по:
			<p id="psor">имени<input type="radio" name="sor" value="imya" style="top: 2px; position: relative;"></p>
			<p id="psor">играм<input type="radio" name="sor" value="igry" style="top: 2px; position: relative;"></p>
			<p id="psor">голам<input type="radio" name="sor" value="goly" checked style="top: 2px; position: relative;"></p>
			<p id="psor">к.к.<input type="radio" name="sor" value="kk" style="top: 2px; position: relative;"></p>
			<p id="psor">ж.к.<input type="radio" name="sor" value="zhk" style="top: 2px; position: relative;"></p>
			<input type="submit" value="отсортировать" style="bottom: 2px; position: relative;">
		</p>
	</form>
		<tr id="strtb"><td>Ф.И.О</td><td style="border-left:1px solid black;">Игры</td><td id="strtb">Голы</td><td id="krk"><img src="igroki/kk.png"></td><td id="zhk"><img src="igroki/zhk.png"></td></tr>
		<tr id="stramplua"><td colspan="6">Вратари</td></tr>
		<?php 
		require('bd.php');
		$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`goals` DESC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`goals` DESC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`goals` DESC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`goals` DESC";
    $result3 = mysqli_query($conn, $query3);
if ($_POST['sor'] == "imya") {
	$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`f.i.` ASC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`f.i.` ASC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`f.i.` ASC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`f.i.` ASC";
    $result3 = mysqli_query($conn, $query3);
}
if ($_POST['sor'] == "igry") {
	$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`koligr` DESC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`koligr` DESC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`koligr` DESC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`koligr` DESC";
    $result3 = mysqli_query($conn, $query3);
}
if ($_POST['sor'] == "goly") {
	$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`goals` DESC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`goals` DESC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`goals` DESC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`goals` DESC";
    $result3 = mysqli_query($conn, $query3);
}
if ($_POST['sor'] == "kk") {
	$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`kk` DESC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`kk` DESC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`kk` DESC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`kk` DESC";
    $result3 = mysqli_query($conn, $query3);
}
if ($_POST['sor'] == "zhk") {
	$query = "SELECT * FROM `igroki` where `amplua` = 'вратарь' ORDER BY `igroki`.`zhk` DESC";
    $result = mysqli_query($conn, $query);
    $query1 = "SELECT * FROM `igroki`  where `amplua` = 'защитник' ORDER BY `igroki`.`zhk` DESC";
    $result1 = mysqli_query($conn, $query1);
    $query2 = "SELECT * FROM `igroki`  where `amplua` = 'полузащитник' ORDER BY `igroki`.`zhk` DESC";
    $result2 = mysqli_query($conn, $query2);
    $query3 = "SELECT * FROM `igroki`  where `amplua` = 'нападающий' ORDER BY `igroki`.`zhk` DESC";
    $result3 = mysqli_query($conn, $query3);
}

		while ($row = mysqli_fetch_assoc($result)) {
			$fi = $row['f.i.'];
			$koligr = $row['koligr'];
			$amp = $row['amplua'];
			$gols = $row['goals'];
			$golpas = $row['golpas'];
			$zhk = $row['zhk'];
			$kk = $row['kk'];
			$foto = $row['foto'];
			echo "<tr id='strtbr'><td id='strtbn1'><img src='$foto' id='igrph'>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		}
		?>
		<tr id="stramplua"><td colspan="6">Защитники</td></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result1)) {
			$fi = $row['f.i.'];
			$koligr = $row['koligr'];
			$amp = $row['amplua'];
			$gols = $row['goals'];
			$golpas = $row['golpas'];
			$zhk = $row['zhk'];
			$kk = $row['kk'];
			$foto = $row['foto'];
			echo "<tr id='strtbr'><td id='strtbn1'><img src='$foto' id='igrph' style='height:47px;''>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		}

		?>
		<tr id="stramplua"><td colspan="6">Полузащитники</td></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result2)) {
			$fi = $row['f.i.'];
			$koligr = $row['koligr'];
			$amp = $row['amplua'];
			$gols = $row['goals'];
			$golpas = $row['golpas'];
			$zhk = $row['zhk'];
			$kk = $row['kk'];
			$foto = $row['foto'];
			echo "<tr id='strtbr'><td id='strtbn1'><img src='$foto' id='igrph'>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		}

		?>
		<tr id="stramplua"><td colspan="6">Нападающие</td></tr>
		<?php
		while ($row = mysqli_fetch_assoc($result3)) {
			$fi = $row['f.i.'];
			$koligr = $row['koligr'];
			$amp = $row['amplua'];
			$gols = $row['goals'];
			$golpas = $row['golpas'];
			$zhk = $row['zhk'];
			$kk = $row['kk'];
			$foto = $row['foto'];
			echo "<tr id='strtbr'><td id='strtbn1'><img src='$foto' id='igrph'>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		}

		?>
	</table>
</div>
</body>
</html>