<?php

session_start();
include_once 'config.php';


$name=$_POST['user'];
$pass=$_POST['password'];

if($name=="admin" && $pass=="admin"){
    $_SESSION['admin'] = true;
        header("location:administrator.php");

}

else{
    $s="select * from admin where A_NAME='$name' && A_PASS='$pass'";  
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);

    if($num==1){
        $_SESSION["username"]=$name;
        header('location:welcome.php');
    }
    else {
        header('location:login.php');
    }
}
?>