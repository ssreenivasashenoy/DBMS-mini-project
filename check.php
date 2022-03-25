<?php


include_once "config.php";

session_start();

if(!isset($_SESSION['admin']))
  header("location:login.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['submit'])){
        $valid_user = $_POST['valid_user'];
        $pattern = "/CS|EC|IS|ME/i";
        if(preg_match($pattern, $valid_user)){
            $sql = "select * from student where S_ID = '$valid_user'";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                if($num == 1){     
                    $_SESSION['student'] = true;
                    $_SESSION['student_id'] = mysqli_fetch_assoc($result)['S_ID'];
                    header("location:studentdashboard.php");
                }
                else{
                    header("location:welcome.php");
                }
        }
        else{

            $tpat= "/ST/i";
            if(preg_match($tpat, $valid_user)){
                $sql = "select * from staff where ST_ID = '$valid_user'";
                $result=mysqli_query($con,$sql);
                $num=mysqli_num_rows($result);
                if($num == 1){
                    $_SESSION['teacher'] = true;
                    $_SESSION['teacherid'] = mysqli_fetch_assoc($result)['ST_ID'];
                    header("location:staffdashboard.php");
                }
                else{
                    header("location:welcome.php");
                }
                    
            }
            else{
                header("location:welcome.php");
            }
            
        }
    }
}
?>

