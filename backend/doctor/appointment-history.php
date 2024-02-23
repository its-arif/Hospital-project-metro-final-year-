<?php
session_start();
error_reporting(0);
include('include/config.php');

if (strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else 
	if (isset($_GET['cancel'])) {
		$appointmentId = $_GET['id'];
		$appointmentQuery = mysqli_query($con, "SELECT users.* , appointment.* FROM appointment JOIN users ON users.id=appointment.userId WHERE appointment.id='$appointmentId'");
		$appointmentDetails = mysqli_fetch_assoc($appointmentQuery);
	
		$patientName = $appointmentDetails['fullName'];
		$phone = $appointmentDetails['phone'];
		$email = $appointmentDetails['email'];
		$gender = $appointmentDetails['gender'];
		$patientAddress = $appointmentDetails['address'];
		$age = $appointmentDetails['age'];
		$patientMedHistory = $appointmentDetails['PatientMedhis'];
	
		// Insert into tblpatient
		mysqli_query($con, "INSERT INTO tblpatient (Docid, PatientName, PatientContno, PatientEmail, PatientGender, PatientAdd, PatientAge, PatientMedhis) 
						   VALUES ('" . $_SESSION['id'] . "', '$patientName', '$phone', '$email', '$gender', '$patientAddress', '$age', '$patientMedHistory')");
	
		// Update appointment status
		mysqli_query($con, "UPDATE appointment SET doctorStatus='0' WHERE id='$appointmentId'");
	
		$_SESSION['msg'] = "Appointment Aproved, and patient details added to the Manage Patients page.";
		header("location: appointment-history.php");
		exit();
	}

    if (isset($_GET['approve'])) {
		$appointmentId = $_GET['id'];
		$appointmentQuery = mysqli_query($con, "SELECT users.* , appointment.* FROM appointment JOIN users ON users.id=appointment.userId WHERE appointment.id='$appointmentId'");
		$appointmentDetails = mysqli_fetch_assoc($appointmentQuery);
	
		$patientName = $appointmentDetails['fullName'];
		$phone = $appointmentDetails['phone'];
		$email = $appointmentDetails['email'];
		$gender = $appointmentDetails['gender'];
		$patientAddress = $appointmentDetails['address'];
		$age = $appointmentDetails['age'];
		$patientMedHistory = $appointmentDetails['PatientMedhis'];
	
		// Insert into tblpatient
		mysqli_query($con, "INSERT INTO tblpatient (Docid, PatientName, PatientContno, PatientEmail, PatientGender, PatientAdd, PatientAge, PatientMedhis) 
						   VALUES ('" . $_SESSION['id'] . "', '$patientName', '$phone', '$email', '$gender', '$patientAddress', '$age', '$patientMedHistory')");
	
		// Update appointment status
		mysqli_query($con, "UPDATE appointment SET doctorStatus='1' WHERE id='$appointmentId'");
		
		$_SESSION['msg'] = "Appointment approved, and patient details added to the Manage Patients page.";
		header("location: appointment-history.php");
		exit();
	}
	
	

    if (isset($_GET['delete'])) {
        $appointmentId = $_GET['id'];
        mysqli_query($con, "DELETE FROM appointment WHERE id='$appointmentId'");
        $_SESSION['msg'] = "Appointment deleted.";
        header("location: appointment-history.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Appointment History</title>
		
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
	<div class="container navigation" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);width: 98.85vw;height: 70px;padding-top: 10px;">

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
</div>
</div>

</div>





<div class="container-fluidx">
    <!-- Sidebar -->
    <div class="sidebar">
	<div class="panel-heading">
													<h5 class="panel-title">WELCOME BACK</h5>
												

	<?php 
	$did=$_SESSION['dlogin'];
$sql=mysqli_query($con,"select * from doctors where docEmail='$did'");
while($data=mysqli_fetch_array($sql))
{
?>
<h5 class="panel-titleX"><?php echo htmlentities($data['doctorName']);?></h5>
<p><b>
<?php if($data['updationDate']){?>
<p><b></p>
<?php }} ?>
<hr />	
</div>
        <ul class="nav flex-column">

	
	
										
					
            


     
            <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="edit-profile.php">My Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment-history.php">My Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-patient.php">Manage Patient</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-patient.php">Ad patient</a>
            </li>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="change-password.php">Chnage password</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
            </li>
        </ul>
    </div>
			




		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				 
				<div class="main-contet" >
					<div class="wrap-content container" id="container">
						 
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						 
						 
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Patient  Name</th>
												<th>Specialization</th>
												<th>Consultancy Fee</th>
												<th>Appointment Date / Time </th>
											
											
												<th>Action</th>
												
											</tr>
										</thead>
										<tbody>
<?php
$sql=mysqli_query($con,"select users.fullName as fname,appointment.*  from appointment join users on users.id=appointment.userId where appointment.doctorId='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['fname'];?></td>
												<td><?php echo $row['doctorSpecialization'];?></td>
												<td><?php echo $row['consultancyFees'];?></td>
												<td><?php echo $row['appointmentDate'];?> / <?php echo
												 $row['appointmentTime'];?>
												</td>
												


<td>
    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>
        <a href="appointment-history.php?id=<?php echo $row['id']?>&cancel=update" onClick="return confirm('Are you sure you want to approve this appointment ?')" class="btn btn-success btn-xs tooltips" title="Cancel Appointment" tooltip-placement="top" tooltip="Remove">Approve</a>

        <a href="appointment-history.php?id=<?php echo $row['id']?>&delete=update" onClick="return confirm('Are you sure you want to delete this appointment ?')" class="btn btn-danger btn-xs tooltips" title="Delete Appointment" tooltip-placement="top" tooltip="Delete">Cancel</a>
    <?php } else {
        echo "Aproved";
        ?>
        <a href="appointment-history.php?id=<?php echo $row['id']?>&delete=update" onClick="return confirm('Are you sure you want to delete this appointment ?')" class="btn btn-success btn-xs tooltips" title="Delete Appointment" tooltip-placement="top" tooltip="Delete">Delete</a>
    <?php } ?>
</td>


											</tr>
											
											<?php 
$cnt=$cnt+1;
											 }?>
											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
						
						 
						 
						
					</div>
				</div>
			</div>
			 
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php  ?>
