<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="css/master.css">
  <meta charset="utf-8">
  <title>Register you're artist</title>
</head>
<body>
  <main>
    <h1>Register the artist below</h1>
    <form class="" action="create.php" method="post">
      <p>Artist</p>
      <input type="text" name="artist" placeholder="type here">
      <p>Title</p>
      <input type="text" name="title" placeholder="type here">
      <button type="submit" name="submit">Submit</button>
    </form>
  </main>
  <?php
   include_once 'connect.php' ;

    //selecteerd van tabel songs
    $sql = 'SELECT * FROM `songs`';
    $results = $conn->query($sql);

    //pakt een record en maakt er een associatief array van
    if (mysqli_num_rows($results) >0) {
      while ($row = $results->fetch_assoc()){
        $data[] = $row;
        echo print_r($row)."<br>";   //hier moet ik een table aan koppelen
     }
   }//code hieronder verwerken in code hierboven!
  ?>
  <table>
    <tr>
      <td>Artist</td>
      <td>Title</td>
      <td>ID</td>
    </tr>
    <?php foreach ($results as $row) : ?>
    <tr>
      <td><?php echo $row[0]; ?></td>
      <td><?php echo $row[1]; ?></td>
      <td><?php echo $row[2]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
