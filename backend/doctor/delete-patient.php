<?php
include('include/config.php');
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $query = mysqli_query($con, "DELETE FROM tblpatient WHERE ID='$id'");
    if ($query) {
        echo "<script>alert('Patient deleted successfully.');</script>";
        echo "<script>window.location.href='manage-patient.php';</script>";
    } else {
        echo "<script>alert('Failed to delete patient.');</script>";
    }
}
?>