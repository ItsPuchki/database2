<?php
//haalt foutmeldingen weg
error_reporting(0);

$artist=$_POST['artist'];
$title=$_POST['title'];
$delete=$_POST['delete'];
$id=$_POST['id'];
$update=$_POST['update'];

//create
if (isset($_POST['submit'])) {
  $insert = "INSERT INTO `songs` (`artist`,`title`)
  VALUES ('".$artist."','".$title."');";

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
  $update = "UPDATE `songs` SET `artist` = '$artist',`title` = '$title' WHERE `songs`.`id`=$id;";
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
  $sql = "DELETE FROM songs WHERE id=$id";

  if ($conn->query($sql)) {
    echo "data is deleted!";
  }
  else
  {
    echo mysqli_error($conn);
  }
}



?>
