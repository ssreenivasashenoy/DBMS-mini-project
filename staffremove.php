<?php

include_once 'config.php';

$sql = "DELETE FROM staff WHERE ST_ID ='" . $_GET["removestaff"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header('location:administrator.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>