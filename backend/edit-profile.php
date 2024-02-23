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
<?php } ?>
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
						 
					
						 
						 
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">

									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
									<?php 
$sql=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
<h4><?php echo htmlentities($data['fullName']);?>'s Profile</h4>
<p><b>
<?php if($data['updationDate']){?>
<p><b></p>
<?php } ?>
<hr />													<form role="form" name="edit" method="post">
													

<div class="form-group">
															<label for="fname">
																 User Name
															</label>
	<input type="text" name="fname" class="form-control" value="<?php echo htmlentities($data['fullName']);?>" >
														</div>


<div class="form-group">
															<label for="address">
																 Address
															</label>
					<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>
<div class="form-group">
															<label for="city">
																 City
															</label>
		<input type="text" name="city" class="form-control" required="required"  value="<?php echo htmlentities($data['city']);?>" >
														</div>
	
<div class="form-group">
									<label for="gender">
																Gender
															</label>

<select name="gender" class="form-control" required="required" >
<option value="<?php echo htmlentities($data['gender']);?>"><?php echo htmlentities($data['gender']);?></option>
<option value="male">Male</option>	
<option value="female">Female</option>	
<option value="other">Other</option>	
</select>

														</div>

														<div class="form-group">
    <label for="fess">User Email</label>
    <input type="email" name="uemail" class="form-control" readonly="readonly" value="<?php echo htmlentities($data['email']); ?>">
    <input type="email" name="new_email" class="form-control" placeholder="Enter New Email">
  
</div>


														
														
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
													<?php } }?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
						
						 
			
					
					
						
						
					
						 
						
					</div>
				</div>
			</div>

		</div>