<?php
include_once 'config.php';
    session_start();
    $staff_id = $_SESSION['teacherid'];
    $student_id = $_POST['id'];
    if(isset($student_id)){
        $query= "select * from `attend` where S_ID = '$student_id'";
        $res = mysqli_query($con,$query) or die('query failed');
        $count = mysqli_num_rows($res);
        if($count==0){
            $query1 = "INSERT INTO `attend` (`S_ID`, `ATTEND`, `ST_ID`) VALUES ('$student_id', 1,'$staff_id')";
        }else{
            $values = mysqli_fetch_assoc($res);
            $attend = $values['ATTEND']+1;
            $query1 = "UPDATE `attend` SET `ATTEND` = '$attend' WHERE `attend`.`S_ID` = '$student_id'";
        }
        $res = mysqli_query($con,$query1) or die("query failed");
        if($res)
        header('location:staffdashboard.php');
    }

?>