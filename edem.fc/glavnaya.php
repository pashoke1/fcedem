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
<div id="d1">Футбольный клуб "Эдем"</div>
<form action="avt.php" method="post">
	<div id="avt1">
		Авторизация
		<br>
		<input type="text" name="username" placeholder="Логин" id="log1">
<br>
		<input type="password" name="password" placeholder="Пароль" id="log1">
		<br>
		<input type="submit" name="Вход">
		<br>
		<a href="regform.php" id="ar1">Регистрация</a>
	</div>
</form>
<?php  //require("avt.php"); ?>
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
	<br>
	<ul id="spg1">
		<li id="novg1"><a href="" id="ag1">Открытие сайта!<br></a><img src="emblema2.jpg" id="imgg"></li>
        <li id="novg1"><a href="" id="ag1">Первая игра.(фото)<br></a><img src="pi1.png" id="imgg"></li>
        <li id="novg1"><a href="3p.php" id="ag1">Таблица после тура.<br></a></li>
    </ul>
</div>
</body>
</html>