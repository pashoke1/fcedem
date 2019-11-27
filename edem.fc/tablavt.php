<?php 
if (!isset($_SESSION['username'])) {
	?>

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
<?php

} 
if ($_SESSION["igr"] = true) { 


	?>
	<div id="avt1">
		
			<?php
			$foto = $_SESSION["foto"];
			echo "<img src='$foto'>";
			echo $_SESSION["name"] . ' ';
			echo $_SESSION["surname"];
			echo "<br>";
			echo $_SESSION["lch"];
			echo $_SESSION["vihod"];
		?>
		
		
	</div> <?php
}
if ($_SESSION["pol"] == true) { ?>
	<div id="avt1">
		
			<?php
			echo $_SESSION["name_pol"];
		?>
		<br>
		<a href="vihod.php" id="ar1">Vihod</a>
	</div> <?php
}
 ?>