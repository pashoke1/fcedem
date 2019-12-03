if ($fi != NULL) {
    echo $login;
    echo "<br>";
    echo $fi;
    ?>
    <form method="post">
        <p>Зарегистрировать<input type="radio" name="reg" value="da"></p>
        <p>Отклонить<input type="radio" name="reg" value="net"></p>
    <input type="submit" name="зарегистрировать">
        </form>
        <?php
        if ($_POST['reg'] == 'da') {
          $query1 = "INSERT INTO `igroki` (`username`, `password`, `f.i.`)
          VALUES ('$login', '$password', '$fi')";

          mysqli_query($conn, $query1);

          $query3 = "DELETE FROM `prin` WHERE `prin`.`login` = '$login'";

          $result2 = mysqli_query($conn, $query3);


            echo "Зареган";

            mysqli_close($conn);
            die(mysqli_connect_error());
       }
       if ($_POST['reg'] == 'net') {
        $query2 = "DELETE FROM `prin` WHERE `prin`.`login` = '$login'";
        $result2 = mysqli_query($conn, $query2);
        echo "Удален";
        mysqli_close($conn);
        die(mysqli_connect_error());
       }