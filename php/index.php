<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link rel="stylesheet" href="css/master.css">
  <meta charset="utf-8">
  <title>Register you're artist</title>
</head>
<?php include 'connect.php' ?>
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

<?php
  //selecteerd van tabel songs
  $sql = 'SELECT * FROM `songs`';
  $results = $conn->query($sql);

  //pakt een record en maakt er een associatief array van
  while ($row = $results->fetch_assoc()){
     echo print_r($row)."<br>";   //hier moet ik een table aan koppelen
  }
?>
  </main>
</body>
</html>
