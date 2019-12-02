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
		<tr id="strtb"><td id="strtb1">Ф.И.О</td><td id="strtb">Голы</td><td id="strtb">Пасы</td><td id="krk"><img src="igroki/kk.png"></td><td id="zhk"><img src="igroki/zhk.png"></td></tr>
		<tr><td>Нападающие</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr14.png" id="igrph">Бух Михаил Дмитриевич<br><span id="poz">Нападающий</span></td><td id="strtb">3</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr><td>Полузащитники</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr1.png" id="igrph">Сергеев Александр Сергеевич<br><span id="poz">полузащитник</span></td><td id="strtb">10</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
	
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr2.png" id="igrph">Сергеев Максим Сергеевич<br><span id="poz">полузащитник</span></td><td id="strtb">4</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr3.png" id="igrph">Синицын Константин Максимович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr4.png" id="igrph">Абрамов Андрей Андреевич<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr6.png" id="igrph">Жильцов Кузьма Александрович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr7.png" id="igrph">Лесничий Михаил Алексеевич<br><span id="poz">полузащитник</span></td><td id="strtb">2</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr8.png" id="igrph">Меньшиков Игорь Олегович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr9.png" id="igrph">Снеговской Пётр Сергеевич<br><span id="poz">полузащитник</span></td><td id="strtb">1</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr10.png" id="igrph">Сагыналиев Керим Ишенбекович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr11.png" id="igrph">Муркин Андрей Эдуардович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">1</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr12.png" id="igrph">Филатов Святослав Антонович<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr13.png" id="igrph">Трубицын Никита Сергеевич<br><span id="poz">полузащитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr><td>Нападающие</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr14.png" id="igrph">Бух Михаил Дмитриевич<br><span id="poz">Нападающий</span></td><td id="strtb">3</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr><td>Защитники</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr15.png" id="igrph">Баранов Григорий Александрович<br><span id="poz">защитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr16.png" id="igrph">Востриков Александр Константинович<br><span id="poz">защитник</span></td><td id="strtb">3</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr17.png" id="igrph">Жоржес Андрей Набилевич<br><span id="poz">защитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr18.png" id="igrph">Коробов Максим Денисович<br><span id="poz">защитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">1</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr19.png" id="igrph">Никитенко Сергей Дмитриевич<br><span id="poz">защитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">1</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr20.png" id="igrph">Парахин Дмитрий Юрьевич<br><span id="poz">защитник</span></td><td id="strtb">2</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr5.png" id="igrph">Фомичев Павел Павлович<br><span id="poz">защитник</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">2</td></tr>
		<tr><td>Вратари</td></tr>
		<tr id="strtbr"><td id="strtbn1"><img src="igroki/igr21.png" id="igrph">Мехтиев Руслан Самирович<br><span id="poz">Вратарь</span></td><td id="strtb">0</td><td id="strtb">0</td><td id="krk">0</td><td id="zhk">0</td></tr>

	</table>
</div>
</body>
</html>