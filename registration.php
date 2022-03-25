<?php

session_start();
include_once 'config.php';
header('location:login.php');


$name=$_POST['user'];
$pass=$_POST['password'];
// $pass=password_hash($pass, PASSWORD_DEFAULT);

$s="select * from admin where A_NAME='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num == 1){
    echo "USERNAME ALREADY TAKEN";

}
else {
    $reg="INSERT INTO admin(A_NAME,A_PASS) VALUES ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "REGISTERED";
}

?>