<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'attendance');
if(!$con){
    die('Could not Connect MySql Server:' .mysql_error());
  }
?>