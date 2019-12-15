
<form method="POST" enctype="multipart/form-data" action="test1.php">
  

Картинка: <input type="file" name="image"></br></br>

<input type="submit" value="Опубликовать урок">
</form>

<?php

require('bd.php');



$query = "
SELECT `image`
FROM `test`
";
$result = mysqli_query($conn, $query);
$image = mysqli_fetch_array($result)['image'];

echo '<img src="data:image/png;base64,' . base64_encode($image) . '" />';
?>