<?php session_start(); 
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
<?php
$id = $_POST['id'];
require('bd.php');
$query = "SELECT * FROM `igroki` where `id` = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
            $id = $row['id'];
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
	echo "<img src='$foto' id='fotolch'>";
	?>
	<div style="margin-left: 50%; margin-top: -17%;">
	<p id="infalch">Имя: <?php echo $fi;?></p>
	<p id="infalch">Возраст: <?php echo $age;?></p>
	<p id="infalch">Дата Рождения:  <?php echo $dr;?></p>
	<p id="infalch">Клуб:<img src="emblema3.png" style="height: 24px; top: 2px; position: relative;margin:0px 2px;">Эдем</p>
</div>

	<div id="bioglch" >Биография

	<p id="bioglch1"><?php echo $biog; ?></p>

	</div>
	<table id="tbls">
		<tr id="strtb"><td>Ф.И.О</td><td style="border-left:1px solid black;">Игры</td><td id="strtb">Голы</td><td id="krk"><img src="igroki/kk.png"></td><td id="zhk"><img src="igroki/zhk.png"></td></tr>
		<?php

		
    
		echo "<tr id='strtbr'><td id='strtbn1'><img src='$foto' id='igrph' style='height:47px;''>$fi<br><span id='poz'>$amp</span></td><td id='strtb'>$koligr</td><td id='strtb'>$gols</td><td id='krk'>$kk</td><td id='zhk'>$zhk</td></tr>";
		?>
	</table>
</div>
</body>
</html>
