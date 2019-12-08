  
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
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Матч№1')">Матч№1</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№2')">Матч№2</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№3')">Матч№3</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№4')">Матч№4</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№5')">Матч№5</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№6')">Матч№6</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№7')">Матч№7</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№8')">Матч№8</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№9')">Матч№9</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№10')">Матч№10</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№11')">Матч№11</button>
  <button class="tablinks" onclick="openCity(event, 'Матч№12')">Матч№12</button>
</div>

 <div id="Матч№1" class="tabcontent">
  <h3>Матч№1</h3>
  <img src="emblema3.png" id="me1">
  <div id="sch1">2 : 2</div>
  <img src="soperniki/k2.png" id="kv1">
  <br>
  <br>
  <div id="goli">Голы:<br>Сергеев А.<br>Евдокимов В.</div>
</div>
<div id="Матч№2" class="tabcontent">
  <h3>Матч№2</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">0 : 6</div>
  <img src="soperniki/k3.png" id="kv1">
    <br>
  <br>
  <div id="goli"></div>
  <a id="fotom" href="https://vk.com/album-99452026_267199170">Фотообзор матча<br><img src="foto.png" id="fotomp"></a>
  </div>
<div id="Матч№3" class="tabcontent">
  <h3>Матч№3</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">3 : 13</div>
  <img src="soperniki/k1.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Осипов Д.(2)<br>Бух М.</div>
  <a id="fotom" href="https://vk.com/album-99452026_267466156">Фотообзор матча<br><img src="foto.png" id="fotomp"></a>
</div>
<div id="Матч№4" class="tabcontent">
  <h3>Матч№4</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">1 : 8</div>
  <img src="soperniki/k4.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев А.</div>
</div>
<div id="Матч№5" class="tabcontent">
  <h3>Матч№5</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">4 : 4</div>
  <img src="soperniki/k5.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Востриков А.(2)<br>Сергеев М.<br>Матасов И.(аг)</div>
  <a id="fotom" href="https://vk.com/album-99452026_268160223">Фотообзор матча<br><img src="foto.png" id="fotomp"></a>
</div>
<div id="Матч№6" class="tabcontent">
  <h3>Матч№6</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">3 : 2</div>
  <img src="soperniki/k6.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев М.<br>Бух М.<br>Сергеев А.</div>
</div>
<div id="Матч№7" class="tabcontent">
  <h3>Матч№7</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">3 : 3</div>
  <img src="soperniki/k7.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев М.<br>Сергеев А.(2)</div>
</div>
<div id="Матч№8" class="tabcontent">
  <h3>Матч№8</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">5 : 4</div>
  <img src="soperniki/k8.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев А.(2)<br>Парахин Д.(2)<br>Снеговский П.</div>
</div>
<div id="Матч№9" class="tabcontent">
  <h3>Матч№9</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">3 : 2</div>
  <img src="soperniki/k9.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев М.<br>Бух М.<br>Гудин К.(аг)</div>
</div>
<div id="Матч№10" class="tabcontent">
  <h3>Матч№10</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">0 : 1</div>
  <img src="soperniki/k10.png" id="kv1">
    <br>
  <br>
  <div id="goli"></div>
  <div id="videoob">Обзор матча<br><iframe width="400" height="250" src="https://www.youtube.com/embed/9miQ1LvY-uQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
<div id="Матч№11" class="tabcontent">
  <h3>Матч№11</h3>
 <img src="emblema3.png" id="me1">
  <div id="sch1">3 : 2</div>
  <img src="soperniki/k11.png" id="kv1">
    <br>
  <br>
  <div id="goli">Голы:<br>Сергеев М.<br>Бух М.<br>Сергеев А.</div>
</div>
<script type="text/javascript">
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</div>
</body>
</html>