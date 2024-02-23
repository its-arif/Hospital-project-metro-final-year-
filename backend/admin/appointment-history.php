<?php
session_start();
error_reporting(0);
include('include/config.php');
if (strlen($_SESSION['id'] == 0)) {
    header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patients | Appointment History</title>
		
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
	.container-fluid container-fullw bg-whitex {
    margin-left: -15px;
    margin-right: -15px;
    padding-left: 30px;
    padding-right: 30px;
    padding-top: 0px;
    padding-bottom: 30px;
    border-bottom: 1px solid #eee;

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
	



</div>
        <ul class="nav flex-column">

	

            <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-doctors.php">Manage Docotrs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add-doctor.php">Add New docotor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment-history.php">Total Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="manage-patient.php">Manage Patients</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
            </li>
        </ul>
    </div>
				

					<?php include('include/header.php');?>
				 
				<div class="main-contett" style= "background:  white">
					<div class="wrap-content container" id="container">
						 
						<section id="page-titlex">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patients  | Appointment History</h1>
																	</div>
								
								</ol>
							</div>
						</section>

                    <div class="container-fluid container-fullw bg-whitex">
                        <div class="row">
                            <div class="col-md-12">
                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg']); ?></p>
                                <h2 class="panel-titleX">Patients | Appointment History</h2>

                                <?php
                                $countCanceledByDoctor = 0;
                                $totalFeesFromCanceled = 0;

                                $sql = mysqli_query($con, "SELECT doctors.doctorName AS docname, users.fullName AS pname, appointment.* FROM appointment JOIN doctors ON doctors.id=appointment.doctorId JOIN users ON users.id=appointment.userId");

                                while ($row = mysqli_fetch_array($sql)) {
                                    if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
                                        $countCanceledByDoctor++;
                                        $totalFeesFromCanceled += $row['consultancyFees'];
                                    }
                                }
                                ?>

                                <!-- Display Total Canceled Appointments -->
                                <p>Total Aproved Appointments: <?php echo $countCanceledByDoctor; ?></p>

                                <!-- Display Total Fees from Canceled Appointments -->
                                <p>Total Fees from Aproved Appointments: <?php echo $totalFeesFromCanceled; ?></p>

                                <!-- ... (existing appointment table code) -->


						 
						 
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
									<thead>
    <tr>
        <th class="center">#</th>
        <th class="hidden-xs">Doctor Name</th>
        <th>Patient Name</th>
        <th>Specialization</th>
        <th>Consultancy Fee</th>
        <th>Current Status</th>
      
    </tr>
</thead>
										<tbody>
<?php
$sql=mysqli_query($con,"select doctors.doctorName as docname,users.fullName as pname,appointment.*  from appointment join doctors on doctors.id=appointment.doctorId join users on users.id=appointment.userId ");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>

<?php  

$ret=mysqli_query($con,"select * from tblmedicalhistory  where PatientID='$vid'");



 ?>




											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td class="hidden-xs"><?php echo $row['docname'];?></td>
												<td class="hidden-xs"><?php echo $row['pname'];?></td>
												<td><?php echo $row['doctorSpecialization'];?></td>
												<td><?php echo $row['consultancyFees'];?></td>
												
												
												<td>
    <?php
    if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 1)) {
        echo "Active";
    }
    if (($row['userStatus'] == 0) && ($row['doctorStatus'] == 1)) {
        echo "Cancel by Patient";
    }

    if (($row['userStatus'] == 1) && ($row['doctorStatus'] == 0)) {
        echo "Aproved by Doctor";
    }
    ?>
</td>




												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
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
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function deleteAppointment(appointmentID) {
        var confirmDelete = confirm("Are you sure you want to delete this appointment?");
        if (confirmDelete) {
            $.ajax({
                type: "POST",
                url: "delete-appointment.php",
                data: { appointmentID: appointmentID },
                success: function (response) {
                    alert("Appointment deleted successfully");
                    // Optionally, you can reload the page or update the table after deletion.
                    location.reload();
                },
                error: function (error) {
                    alert("Error deleting appointment");
                }
            });
        }
    }
</script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
 
	</body>
</html>
<?php } ?>
