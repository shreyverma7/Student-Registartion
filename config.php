
<?php
$mysqli = mysqli_connect("localhost","root","","studentregistration");

// Check connection
if ($mysqli == false) {
  echo "Failed to connect to MySQL: " . mysqli_connect_errno();
  //exit();
}else{
    // echo "success";
}


?>