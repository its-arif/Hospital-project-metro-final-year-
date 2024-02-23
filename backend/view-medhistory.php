<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
  {
    
    $vid=$_GET['viewid'];
    $bp=$_POST['bp'];
    $bs=$_POST['bs'];
    $weight=$_POST['weight'];
    $temp=$_POST['temp'];
   $pres=$_POST['pres'];
   
 
      $query.=mysqli_query($con, "insert   tblmedicalhistory(PatientID,BloodPressure,BloodSugar,Weight,Temperature,MedicalPres)value('$vid','$bp','$bs','$weight','$temp','$pres')");
    if ($query) {
    echo '<script>alert("Medicle history has been added.")</script>';
    echo "<script>window.location.href ='manage-patient.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Users | Medical History</title>
		
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
    </style>
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
  <li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="dashboard.php" style="color: white">DASHBOARD</a></li>
	 

<li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="index.php" style="color: white">HOME</a></li>

	<li><a href="logout.php" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">LOG OUT</a></li>
 

	  </ul>
</div>
</div>

</div>	
				 
				<div class="main-contett" style= "background:  white">
					<div class="wrap-content container" id="container">
						 
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
 

	  </ul>
</div>
</div>

</div>
		<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-contett" style= "background:  white">
<div class="wrap-content container" id="container">
						 
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Users. | Medical History</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Users</span>
</li>
<li class="active">
<span>Medical History</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">Users <span class="text-bold">Medical History</span></h5>
<?php
                               $vid=$_GET['viewid'];
                               $ret=mysqli_query($con,"select * from tblpatient where ID='$vid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Patient Details</td></tr>

    <tr>
    <th scope>Patient Name</th>
    <td><?php  echo $row['PatientName'];?></td>
    <th scope>Patient Email</th>
    <td><?php  echo $row['PatientEmail'];?></td>
  </tr>
  <tr>
    <th scope>Patient Mobile Number</th>
    <td><?php  echo $row['PatientContno'];?></td>
    <th>Patient Address</th>
    <td><?php  echo $row['PatientAdd'];?></td>
  </tr>
    <tr>
    <th>Patient Gender</th>
    <td><?php  echo $row['PatientGender'];?></td>
    <th>Patient Age</th>
    <td><?php  echo $row['PatientAge'];?></td>
  </tr>
  <tr>
    
    <th>Patient Medical History(if any)</th>
    <td><?php  echo $row['PatientMedhis'];?></td>
     <th>Patient Reg Date</th>
    <td><?php  echo $row['CreationDate'];?></td>
  </tr>
 
<?php }?>
</table>
<?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>
<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="8" >Medical History</th> 
  </tr>
  <tr>
    <th>#</th>
<th>Blood Pressure</th>
<th>Weight</th>
<th>Blood Sugar</th>
<th>Body Temprature</th>
<th>Medical Prescription</th>
<th>Visit Date</th>
</tr>
<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt;?></td>
 <td><?php  echo $row['BloodPressure'];?></td>
 <td><?php  echo $row['Weight'];?></td>
 <td><?php  echo $row['BloodSugar'];?></td> 
  <td><?php  echo $row['Temperature'];?></td>
  <td><?php  echo $row['MedicalPres'];?></td>
  <td><?php  echo $row['CreationDate'];?></td> 
</tr>
<?php $cnt=$cnt+1;} ?>
</table>
                          
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
			 
		</div>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
	</body>
</html>
