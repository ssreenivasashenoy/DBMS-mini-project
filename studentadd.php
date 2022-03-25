<?php

include_once 'config.php';
// if(isset($_POST['submit']))
// {    
     $sname = $_POST['studentname'];
     $saddress = $_POST['studentaddress'];
     $sid = $_POST['studentid'];
     $sbranch = $_POST['studentbranch'];
     $sql = "INSERT INTO student(S_ID,S_NAME,B_ID,S_ADDRESS) VALUES ('$sid','$sname','$sbranch','$saddress')";
     if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript"> alert("NEW STUDENT ADDED");</script>';
        header('location:staffdashboard.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
// }
?>