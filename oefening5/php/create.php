<?php
    if (isset($_POST['submit'])) {
      $artist=$_POST['artist'];
      $title=$_POST['title'];
      $sqll = "INSERT INTO `songs` (`artist`,`title`)
       VALUES ('".$artist."','".$title."');";

      if ( $conn->query($sqll)) {
        echo "data is inserted!";
      }
      else
      {
        echo mysqli_error($conn);
      }
    }

?>
