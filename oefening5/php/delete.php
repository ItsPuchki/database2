<?php

if (isset($delete)) {
  $sql = "DELETE FROM songs WHERE id=$id";//verwijderd song door aangegeven id te gebruiken als selectie

 if ($conn->query($sql) === true) {
   echo"<h4>(";echo $numer;echo") Deleted<br></h4>";
 }
 else {
   echo "<h4>FAILED". $sql . "<br></h4>" . $conn->error;
 }
 }

 ?>
