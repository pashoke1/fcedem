<?php
$username = $_POST['username'];
$password = $_POST['password'];
$query2 = "SELECT * FROM `igroki` where `username` = '$username' and `password` = '$password'";
$result2 = mysqli_query($conn, $query2);
$rowi = mysqli_fetch_assoc($result2);
$otprid = "SELECT * FROM `igroki` WHERE `username` = '$username' ";
$resultid = mysqli_query($conn, $otprid);
$rowid = mysqli_fetch_assoc($resultid);
$id = $rowid['id'];
$otprf = "SELECT * FROM `foto` WHERE `id` = '$id'";
$resultfoto = mysqli_query($conn, $otprf);
$rowfoto = mysqli_fetch_assoc($resultfoto);

$igr = false;


	<?php
	require('bd.php');
	$query = "SELECT * FROM `igroki`";
$result = mysqli_query($conn, $query);

          
			while ($row = mysqli_fetch_assoc($result)) {
				  $id = $row['id'];
            $fi = $row['f.i.'];
			$amp = $row['amplua'];
			$foto = $row['foto'];
			$dr = $row['dr'];
			$age = $row['age'];
			
			
	echo "<form action='prosmotrlch.php' method='post'>
	<input type='hidden' name='id' value='$id'>
	<button id='aikonka'>
	
	<img src='$foto' style= 'height: 200px; border: 1px ridge #dee0e3;border-radius: 10px; position: relative;top: 15px; margin-bottom: 10px;'>";?>
	<div style="text-align: left; margin-left: 15px;">
	<p>Позиция:<?php echo $amp;?></p>
	<p>Имя: <?php echo $fi;?></p>
	<p>Возраст: <?php echo $age;?></p>
	<p>Дата Рождения:  <?php echo $dr;?></p>
	<p style="margin-top: -12px;">Клуб:<img src="emblema3.png" style="height: 16px; top: 2px; position: relative;margin:0px 2px;">Эдем</p>
	
		</button>
	</form>

	</div>
<?php
}?>