<?php
session_start();
include('include/config.php');

if (isset($_POST['appointmentID'])) {
    $appointmentID = $_POST['appointmentID'];
    
    // Perform the deletion query
    $deleteQuery = mysqli_query($con, "DELETE FROM appointment WHERE appointmentID = '$appointmentID'");

    if ($deleteQuery) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
