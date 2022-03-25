<?php

include_once 'config.php';

$sql = "DELETE FROM student WHERE S_ID='" . $_GET["removestudent"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header('location:staffdashboard.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>