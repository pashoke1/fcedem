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
		$text = $row5["text"];
		$comment_id = $row5["id"];
		$date = $row5["pubdate"];
		if($text != "")
		{
			echo "<div id='ostcomm'>";
			echo "<h3 id='polzovatelcomm'>$username<p id='date'>$date</p><h3>";
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