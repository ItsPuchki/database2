<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="../css/master.css">
  <meta charset="utf-8">
  <title>Register you're artist</title>
</head>

<body>
  <h1>Register the artist below</h1>
    <form class="" action="create.php" method="post" autocomplete="off">
      <p>Artist</p>
      <input type="text" name="artist" placeholder="type here">
      <p>Title</p>
      <input type="text" name="title" placeholder="type here">
      <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <br>

    <?php
    include_once 'connect.php' ;
    //selecteerd van tabel songs
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
      echo <div class="results">"<table>".PHP_EOL;
          while ($row = $results->fetch_assoc()){
            echo "<tr><td>{$row['artist']}</td><td>{$row['title']}</td><td>{$row['id']}</td></td></tr>".PHP_EOL;
          }
      echo "</table>".PHP_EOL;

      //shows results
      echo 'Total of results is: ' . $results->num_rows;
      //shows updates
      echo "<br>".'Total of rows updated: ' . $conn->affected_rows;
    }

    ?>
</body>
</html>
