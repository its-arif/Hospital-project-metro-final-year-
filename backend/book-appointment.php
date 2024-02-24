<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
$query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
    if($query)
    {
        echo "<script>alert('Your appointment successfully booked');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User  | Book Appointment</title>
    
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
        <script>
        function getdoctor(val) {
            $.ajax({
            type: "POST",
            url: "get_doctor.php",
            data:'specilizationid='+val,
            success: function(data){
                $("#doctor").html(data);
            }
            });
        }
        </script>	
        
        
        <script>
        function getfee(val) {
            $.ajax({
            type: "POST",
            url: "get_doctor.php",
            data:'doctor='+val,
            success: function(data){
                $("#fees").html(data);
            }
            });
        }
        </script>
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
                padding-right: 0px;
                font-size: 18px;
            
                color: #ffff
                
                
            }
            </style>
            <body>
                <body>
                <div class="container navigation" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);width: 100%;height: 70px;padding-top: 10px;">
            
            
                    <div class="navbar-header page-scroll">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                      <a class="navbar-brand js-scroll-triggr" href="http://localhost/hms/hospital/index.php"  style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif; font-size: 20px; color: white">METROPOLITAN HOSPITAL</a>
                    </div>
            
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                      <ul class="nav navbar-nav">
                        <li><a href="http://localhost/hms/hospital/about.php" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">HOME</a></li>
                        <li><a href="http://localhost/hms/hospital/about.php" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">ABOUT US</a></li>
                        <li><a href="http://localhost/hms/hospital/contact.php" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">CONTACT</a></li>
                        <li><a href="http://localhost/hms/hospital/LOGX.html" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">LOG IN</a></li>
                     
            
                          </ul>