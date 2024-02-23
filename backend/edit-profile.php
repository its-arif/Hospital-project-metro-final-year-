?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $newEmail = $_POST['new_email'];

    // Update profile information
    $sql = mysqli_query($con, "UPDATE users SET fullName='$fname', address='$address', city='$city', gender='$gender' WHERE id='" . $_SESSION['id'] . "'");
    if ($sql) {
        $msg = "Your Profile updated Successfully";
    }

    // Update user email if provided
    if (!empty($newEmail)) {
        $updateEmailSql = mysqli_query($con, "UPDATE users SET email='$newEmail' WHERE id='" . $_SESSION['id'] . "'");
        if ($updateEmailSql) {
            $msg .= " and Email updated Successfully";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

html lang="en">
	<head>
		<title>User | Edit Profile</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


