<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="../css/master.css">
  <meta charset="utf-8">
  <title>Register you're artist</title>
</head>

<body>
  <?php
  //zorgt voor verbinding
  include_once 'connect.php' ;
  include 'create.php';

  ?>
  <h1>Register the artist below</h1>
    <form class="" method="post" autocomplete="off">
      <p>Artist</p>
      <input type="text" name="artist" placeholder="type here">
      <p>Title</p>
      <input type="text" name="title" placeholder="type here">
      <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <br>
    <?php
    //selecteert van tabel songs
    $sql = 'SELECT * FROM `songs`';
    $results = $conn->query($sql);
    //pakt een record en maakt er een associatief array van(op line 26 & 27)
    if (mysqli_num_rows($results) >0) {
    /*************
      <table>
      <tr>
      <td>item</td>
      </tr>
      </table>
    **********/

      echo "<br><br><br><table class = 'result'>".PHP_EOL;
      echo "<th>Artist</th>";
      echo "<th>Title</th>";
      echo "<th>ID</th>";
          while ($row = $results->fetch_assoc()){
            echo "<tr><td>{$row['artist']}</td><td>{$row['title']}</td><td>{$row['id']}</td></tr>".PHP_EOL;
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
