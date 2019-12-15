<?php
$username = $_SESSION["name"];
?>
<h2>Комментарии:</h2>
	<?php 

	$query5 = "SELECT * FROM `comments` WHERE `match_id` = '$id'";
	$result5 = mysqli_query($conn, $query5);
	while($row5 = mysqli_fetch_assoc($result5))
	{
		$username = $row5["username"];
			$queryf = "SELECT `foto` FROM `users` WHERE `name_pol` = '$username'";
			$resultf = mysqli_query($conn, $queryf);
			$rowf = mysqli_fetch_assoc($resultf);
		$text = $row5["text"];
		$comment_id = $row5["id"];
		$date = $row5["pubdate"];
		$foto = '<img src="data:image/png;base64,' . base64_encode($rowf['foto']) . ' "style="height:50px;width:40px;display: inline-block;border-radius: 10px;" />';
		if (mysqli_num_rows($resultf) == 0) {
			$queryfi = "SELECT `foto` FROM `igroki` WHERE `f.i.` = '$username'";
			$resultfi = mysqli_query($conn, $queryfi);
			$rowfi = mysqli_fetch_assoc($resultfi);
			$foto = '<img src="data:image/png;base64,' . base64_encode($rowfi['foto']) . ' "style="height:50px;width:40px;display: inline-block;border-radius: 10px;" />';
		}
		if ($rowfi['foto'] == null && $rowf['foto'] == null) {
		$foto = '<img src="anon.png" style="height:50px;width:40px;display: inline-block;border-radius: 10px;"/>';
		}
		if($text != "")
		{
			echo "<div id='ostcomm'>";
			echo "$foto <h3 id='polzovatelcomm'>$username<p id='date'>$date</p><h3>";
			echo "<p id='textpolcomm'>$text</p>";
			echo "</div>";
			if($_SESSION['admin'] ) { ?>
				<form action="delcomm.php" method="POST">
					<input type="hidden" name="id" value=<?php echo "$comment_id"; ?>>
					<input type="submit" value="Удалить комментарий">
				</form> <?php }}}
				$username = $_SESSION["name"];
	if(isset($_SESSION['username']) ) { ?>
		<form action="addcomm.php" method="POST">
			<input type="hidden" name="id" value=<?php echo "$id"; ?>>
			<input type="hidden" name="username" value=<?php echo "\"".$username."\""; ?>>
			<br>
			<textarea name="text" rows="5" cols="75" id="addcomm" placeholder="Оставьте свой комментарий об игре..."></textarea>
			<br>
			<input type="submit" value="Отправить" id="addcommotpr">
		</form>
<?php
}