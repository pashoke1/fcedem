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
	
	<a href="6p.php" id="ast1"><li id="st1">Контакты</li></a>
</ul>
</div>
<div id="cont1">
	<h1 style="text-align: center;">Контакты</h1>
	<img src="vk.png" style="height: 200px;"><p style="
    margin-left: 20%;
	margin-top: -18%;">Представители команды:<br><a href=""><img src="igroki/igr1.png">Cергеев Александр</a><br><a href=""><img src="igroki/igr18.png">Коробов Максим</a><br><a href=""><img src="igroki/igr4.png">Абрамов Андрей</a></a></p>
	<img src="inst.png">
	</div>
</body>
</html>