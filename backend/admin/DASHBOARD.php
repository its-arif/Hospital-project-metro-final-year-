<?php
session_start();
error_reporting(E_ALL);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		
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
		padding-right: 0px;
		font-size: 14px;
	
		color: #ffff
		
		
	}


.card-containerx {
  display: flex;
}

.cardx {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  margin: 0 10px; /* Add margin for spacing between cards */
}

.card:hoverx {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.containerx {
  padding: 2px 16px;
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
	<body  style= "background:  white">
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



						
				 
				<div class="main-contett" style= "background:  white">


				
					<div class="wrap-content container" style= "background:  white" id="container" >

					
						 
						<section id="page-title">

						
							
							<div class="row">
								

								<div class="col-sm-8">
									<h1 class="mainTitle"><h1 class="mainTitle">
									ADMIN
										</a> | Dashboard | <a href="logout.php">
											Log Out
										</a></h1>
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
						 
						 




			
							
										
								<a href="manage-doctors.php" class="xbtn btn-1 btn-sep">
								MANAGE DOCTORS
</a>

<a href="add-doctor.php" class="xbtn btn-1 btn-sep">
Add Doctors
</a>

<a href="doctor-specilization.php" class="xbtn btn-1 btn-sep">
ADD  SPECIALIZATION



<a href="appointment-history.php" class="xbtn btn-1 btn-sep">
Total Appointments
</a>

<a href="manage-patient.php" class="xbtn btn-1 btn-sep">
Manage Patients
</a>
		
					
						
						
					
						 
						
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
<?php } ?>
