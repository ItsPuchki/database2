<?php

if (isset($update)) {
  $sql = "UPDATE `songs` SET `artist`,`title` = '$update', `artist` = 'title' ='$song'
  WHERE `songs`.`num` = $num;";
  if ($conn->query($sql) === true) {
    echo"<h4>(";echo $numer;echo") updated<br></h4>";
  }
  else {
    echo "<h4>FAILED". $sql . "<br></h4>" . $conn->error;
  }
}

?>
