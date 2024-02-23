<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id']==0)) {
 header('location:logout.php');
  } else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
if(isset($_POST['submit']))
{
$cpass=md5($_POST['cpass']);
$did=$_SESSION['id'];
$sql=mysqli_query($con,"SELECT password FROM  doctors where password='$cpass' && id='$did'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$npass=md5($_POST['npass']);
 $con=mysqli_query($con,"update doctors set password='$npass', updationDate='$currentTime' where id='$did'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | change Password</title>
		
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
<script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.npass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npass.focus();
return false;
}
else if(document.chngpwd.cfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cfpass.focus();
return false;
}
else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cfpass.focus();
return false;
}
return true;
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
						
				 
				<div class="main-contett" style= "background:  white">
					<div class="wrap-content container" id="container">
						 
					 
						 
						 
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Change Password</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form role="form" name="chngpwd" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="exampleInputEmail1">
																Current Password
															</label>
							<input type="password" name="cpass" class="form-control"  placeholder="Enter Current Password">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
																New Password
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="New Password">
														</div>
														
<div class="form-group">
															<label for="exampleInputPassword1">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password">
														</div>
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
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
<?php } ?>
