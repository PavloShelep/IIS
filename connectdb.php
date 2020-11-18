<?php
$conn = mysqli_connect('localhost', 'root', '', 'DevOfStartup');
if ($conn){
  echo "success";
} else{
  echo "sorry";
}
?>
