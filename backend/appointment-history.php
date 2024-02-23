<?php
session_start();
error_reporting(0);
include('include/config.php');

if(strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else {
    if(isset($_GET['cancel'])) {
        mysqli_query($con, "update appointment set userStatus='0' where id = '".$_GET['id']."'");
        $_SESSION['msg'] = "Your appointment canceled !!";
    }

    if(isset($_GET['delete'])) {
        $deleteId = $_GET['id'];
        mysqli_query($con, "DELETE FROM appointment WHERE id = '$deleteId'");
        $_SESSION['msg'] = "Appointment deleted successfully!";
        header('location:appointment-history.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User | Appointment History</title>
		
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
        background: #ffff;
    }

    .container-fluidx {
        display: flex;
        padding: 0;
        margin: 0;
    }

    .sidebar {
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgb(56 50 175) 0%, rgb(44 83 194) 100%);
        width: 20%;
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
        transition: color 0.3s ease;
    }

    .sidebar a:hover {
        color: #00c6ff;
    }

    .main-content {
        flex: 1;
        padding: 20px; /* Added padding for better spacing */
    }

    .panel-titleX {
        padding-top: 10px;
        font-size: 18px;
        color: #ffff;
    }

    /* Updated table styles */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .btn {
        padding: 8px 12px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-danger {
        background-color: #d9534f;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c9302c;
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
    <h5 class="panel-title">WELCOME BACK</h5>
												

                                                <?php 
                                            $sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
                                            while($data=mysqli_fetch_array($sql))
                                            {
                                            ?>
                                            <h5 class="panel-titleX"><?php echo htmlentities($data['fullName']);?></h5>
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
                <a class="nav-link" href="book-appointment.php">Book Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="change-password.php">Change Password</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="logout.php">Log out</a>
            </li>
        
        </ul>
    </div>

					
				 
				<div class="main-contnt" >
					<div class="wrap-content container" id="container">
						 
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
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
                        <?php echo htmlentities($_SESSION['msg'] = "");?></p>
                    <table class="table table-hover" id="sample-table-1">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th class="hidden-xs">Doctor Name</th>
                                <th>Specialization</th>
                                <th>Consultancy Fee</th>
                                <th>Appointment Date / Time </th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = mysqli_query($con, "SELECT doctors.doctorName as docname, appointment.*  FROM appointment JOIN doctors ON doctors.id = appointment.doctorId WHERE appointment.userId = '".$_SESSION['id']."'");
                            $cnt = 1;
                            while($row = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <td class="center"><?php echo $cnt;?>.</td>
                                <td class="hidden-xs"><?php echo $row['docname'];?></td>
                                <td><?php echo $row['doctorSpecialization'];?></td>
                                <td><?php echo $row['consultancyFees'];?></td>
                                <td><?php echo $row['appointmentDate'];?> / <?php echo
												 $row['appointmentTime'];?>
												</td>
                              
                                <td>
                                    <?php if(($row['userStatus']==1) && ($row['doctorStatus']==1)) { ?>

                                        <a href="appointment-history.php?id=<?php echo $row['id']?>&delete=1" onClick="return confirm('Are you sure you want to delete this appointment?')" class="btn btn-danger btn-xs">Cancel & Delete</a>
                                    <?php } else {
                                        echo "Aproved";
		?>

    <?php
    } ?>
</td>
                            </tr>
                            <?php
                                $cnt = $cnt + 1;
                            }
                            ?>
                        </tbody>
                    </table>
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
<?php } ?>