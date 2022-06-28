<?php

session_start();
include_once 'config.php';

$date=$_POST['datein'];
$s="select * from attend where DATE_IN='$date'";
$query=mysqli_query($con,$s);
$d=mysqli_num_rows($query);
if($d == 1){
    echo "attendance marked on this date";
}
else {
    $sql="INSERT INTO attend(DATE_IN) VALUES ('$date')";
    mysqli_query($con,$sql);
    echo "attendance marked on $date";
}

?>