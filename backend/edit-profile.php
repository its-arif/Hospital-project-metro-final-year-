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



        </head>

<style>
body {
    font-family: 'Lato', sans-serif;
    margin: 0;
    padding: 0;
    background: #ffff
}

.container-fluidx {
    display: flex;
    padding: 0;
    margin: 0;
}

.sidebar {
    bbackground: rgb(2,0,36);
    width: 20%;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgb(56 50 175) 0%, rgb(44 83 194) 100%);
    padding: 0px;
    color: white;
    min-height: 100vh;
}

.sidebar a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    margin-bottom: 15px;
    display: block;
}

.sidebar a:hover {
    color: #00c6ff;
}

.main-content {
    flex: 1;
    padding: 0px;
}

.panel-titleX {
padding-top: 10px;
font-size: 18px;

color: #ffff


}