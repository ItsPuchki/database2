<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="css/master.css">
  <meta charset="utf-8">
  <title>Verjaardag</title>
</head>

<body>

  <?php include 'process.php'; //zorgt voor crud en verbinding ?>

  <h1>Verjaardag register</h1>
    <form class="" method="post" autocomplete="off">
      <p>Name</p>
      <input type="text" name="name" placeholder="firstname">
      <p>Lastname</p>
      <input type="text" name="last" placeholder="lastname">
      <p>Birthdate</p>
      <input type="text" name="birth" placeholder="Y-M-D">
      <input type="submit" name="submit" value="Add">
      <input type="submit" name="delete" value="delete">
      <input type="text" name="id" placeholder="id">
      <input type="submit" name="update" value="update">
    </form>
    <br>
    <br>

    <?php

    //selecteert van tabel verjaardag
    $sql = 'SELECT * FROM `verjaardag`';
    $results = $conn->query($sql);
    //pakt een record en maakt er een associatief array van(op line 26 & 27)
    if (mysqli_num_rows($results) >0) {

      echo "<br><br><br>".PHP_EOL;
      echo "<table class='result'>".PHP_EOL;
      echo "<th>Name</th>";
      echo "<th>Lastname</th>";
      echo "<th>Birthdate</th>";
      echo "<th>ID</th>";

          while ($row = $results->fetch_assoc()){
            echo "<tr><td>{$row['name']}</td><td>{$row['last']}</td><td>{$row['birth']}</td><td>{$row['id']}</td>";



          //de berekening voor hoeveelheid dagen/maanden/jaren oud
          $bday = new DateTime($row['birth']); // Your date of birth;
          $today = new Datetime(date('m.d.y'));
          $diff = $today->diff($bday);
          echo "<td>";
          printf(' %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
          echo "</td>";

}

      echo "</table>".PHP_EOL;

      //shows results
      echo '<br><br><br>Total of results is: ' . $results->num_rows;
      //shows updates
      echo "<br><br>".'Total of rows updated: ' . $conn->affected_rows;
      $conn->close();
    }
    ?>

</body>
</html>
