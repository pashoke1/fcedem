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
	<?php
	require('bd.php');
	$query = "SELECT * FROM `igroki`";
$result = mysqli_query($conn, $query);

          
			while ($row = mysqli_fetch_assoc($result)) {
				  $id = $row['id'];
            $fi = $row['f.i.'];
			$amp = $row['amplua'];
			$foto = $row['foto'];
			$dr = $row['dr'];
			$age = $row['age'];
			
	echo "<form action='prosmotrlch.php' method='post' id='aikonka'>
	<input type='hidden' name='id' value='$id'>
	<button id='lchb'>
	<img src='$foto' style= 'height: 200px; border: 1px ridge #dee0e3;border-radius: 10px; position: relative;top: 15px; margin-bottom: 10px;'>";
	?>
	<div style="text-align: left; margin-left: 15px;">
	<p>Позиция:<?php echo $amp;?></p>
	<p>Имя: <?php echo $fi;?></p>
	<p>Возраст: <?php echo $age;?></p>
	<p>Дата Рождения:  <?php echo $dr;?></p>
	<p style="margin-top: -12px;">Клуб:<img src="emblema3.png" style="height: 16px; top: 2px; position: relative;margin:0px 2px;">Эдем</p>
	
		</button>
	</form>
<?php
}?>
		</div>
</body>
</html>