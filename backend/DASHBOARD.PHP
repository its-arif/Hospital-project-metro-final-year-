<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>User  | Dashboard</title>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
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

/* General button style */
.xbtn {
	border: none;
	font-family: 'Lato';
	font-size: 18px;
	color: inherit;
	background: none;
	cursor: pointer;
	padding: 40px 80px;
	display: inline-block;
	margin: 15px 10px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 700;
	outline: none;
	position: relative;
	transition: all 0.3s;
}

.btn:after {
	content: '';
	position: absolute;
	z-index: -1;
	transition: all 0.3s;
}

/* Pseudo elements for icons */
.btn:before {
	font-family: 'FontAwesome';
	speak: none;
	font-style: normal;
	font-weight: normal;
	font-variant: normal;
	text-transform: none;
	line-height: 1;
	position: relative;
	-webkit-font-smoothing: antialiased;
}

/* Button 1 */
.btn-1 {
	background: #007aff;
	color: #fff;
}


.btn-1 {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff), #007aff;
    background: linear-gradient(to right, #3931af, #00c6ff), #007aff;
    color: #fff;
 
}


.btn-1:hover {
	background: #2980b9;
}

.btn-1:active {
	background: #2980b9;
	top: 2px;
}

.btn-1:before {
	position: absolute;
	height: 100%;
	left: 0;
	top: 0;
	line-height: 3;
	font-size: 140%;
	width: 60px;
}






	
    </style>
	<body>