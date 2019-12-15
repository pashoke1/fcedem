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
	<h1 id="hg3">Третий дивизион A: таблица</h1>
	<img src="tbl.png" >
</div>
</body>
</html>