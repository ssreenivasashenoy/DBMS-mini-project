<?php

include_once 'config.php';
// if(isset($_POST['submit']))
// {    
     $stname = $_POST['staffname'];
     $staddress = $_POST['staffaddress'];
     $stid = $_POST['staffid'];
     $stbranch = $_POST['staffbranch'];
     $sql = "INSERT INTO staff(ST_ID,ST_NAME,B_ID,ST_ADDRESS) VALUES ('$stid','$stname','$stbranch','$staddress')";
     if (mysqli_query($con, $sql)) {
        echo '<script type="text/javascript"> alert("NEW STAFF ADDED");</script>';
        header('location:administrator.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
     }
     mysqli_close($con);
// }
?>