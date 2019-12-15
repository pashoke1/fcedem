<?php



require('bd.php');

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "
INSERT INTO `test` (`image`)
VALUES('$image')
";
$result = mysqli_query($conn, $query);

$query = "
SELECT `image`
FROM `test`
";
$result = mysqli_query($conn, $query);
$image = mysqli_fetch_array($result)['image'];

echo '<img src="data:image/jpg;base64,' . base64_encode($image) . '" />';
?>