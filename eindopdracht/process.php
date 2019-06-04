<?php
//create connection
$user = 'puchki';
$pass = 'j2wsG9Sj6GBRurN';
$databasename = 'eindopdracht_db2';

//Check connection
$conn = new mysqli('localhost', $user, $pass, $databasename) or die("Unable to connect");

//haalt foutmeldingen weg
error_reporting(0);

$name=$_POST['name'];
$last=$_POST['last'];
$birth=$_POST['birth'];
$delete=$_POST['delete'];
$id=$_POST['id'];
$update=$_POST['update'];

//create
if (isset($_POST['submit'])) {
  $insert = "INSERT INTO `verjaardag` (`name`,`last`,`birth`)
  VALUES ('".$name."','".$last."','".$birth."');";

  if ($conn->query($insert)) {
    echo "data is inserted!";
  }
  else
  {
    echo mysqli_error($conn);
  }
}

//update
if (isset($update)) {
  $update = "UPDATE `verjaardag` SET `name` = '$name',`last` = '$last' ,`birth` = '$birth' WHERE `verjaardag`.`id`=$id;";
  if ($conn->query($update)) {
    echo "data is updated!";
  }
  else
  {
    echo mysqli_error($conn);
  }
}

//delete
if (isset($delete)) {
  $sql = "DELETE FROM verjaardag WHERE id=$id";

  if ($conn->query($sql)) {
    echo "data is deleted!";
  }
  else
  {
    echo mysqli_error($conn);
  }
}

 ?>
