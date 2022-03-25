<?php
include_once 'config.php';
    session_start();
    $staff_id = $_SESSION['teacherid'];
    $student_id = $_POST['id'];
    if(isset($student_id)){
        $query= "select * from `leave` where S_ID = '$student_id'";
        $res = mysqli_query($con,$query) or die('query failed');
        
        $count = mysqli_num_rows($res);
        if($count==0){
            $query1 = "INSERT INTO `leave` (`S_ID`, `DAYS`) VALUES ('$student_id',1)";
        }else{
            $values = mysqli_fetch_assoc($res);
            $leave = $values['DAYS']+1;
            $query1 = "UPDATE `leave` SET `DAYS` = '$leave' WHERE `leave`.`S_ID` = '$student_id'";
        }
        $res = mysqli_query($con,$query1) or die("query failed");
        if($res)
        header('location:staffdashboard.php');
    }

?>