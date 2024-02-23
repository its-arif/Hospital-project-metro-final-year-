<?php
include_once('include/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['full_name'];
$address=$_POST['address'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$password=md5($_POST['password']);
$query=mysqli_query($con,"insert into users(fullname,address,city,gender,email,password,age,phone) values('$fname','$address','$city','$gender','$email','$password','$age','$phone')");
if($query)
{
	echo "<script>alert('Successfully Registered. You can login now');</script>";
	//header('location:user-login.php');
}
}
?>


<!DOCTYPE html>
<html lang="en">

	<head>
		<title>User Registration</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>
		
  <style>
 

    .xxbody {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #4070f4;
    }

    .unique-registration-wrapper {
      position: relative;
      max-width: 430px;
      width: 100%;
      background: #fff;
      padding: 34px;
      border-radius: 6px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.2);
    }

    .unique-registration-wrapper h2 {
      position: relative;
      font-size: 22px;
      font-weight: 600;
      color: #333;
    }

    .unique-registration-wrapper h2::before {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 28px;
      border-radius: 12px;
      background: #4070f4;
    }

    .unique-registration-wrapper form {
      margin-top: 30px;
    }

    .unique-input-box {
      height: 52px;
      margin: 18px 0;
    }

    .unique-registration-wrapper form .unique-input-box input {
      height: 100%;
      width: 100%;
      outline: none;
      padding: 0 15px;
      font-size: 17px;
      font-weight: 400;
      color: #333;
      border: 1.5px solid #C7BEBE;
      border-bottom-width: 2.5px;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .unique-registration-wrapper .unique-input-box input:focus,
    .unique-registration-wrapper .unique-input-box input:valid {
      border-color: #4070f4;
    }

    .unique-registration-wrapper form .unique-policy {
      display: flex;
      align-items: center;
    }

    .unique-registration-wrapper form .unique-policy h3 {
      color: #707070;
      font-size: 14px;
      font-weight: 500;
      margin-left: 10px;
    }

    .unique-registration-wrapper .unique-input-box.button input {
      color: #fff;
      letter-spacing: 1px;
      border: none;
      background: #4070f4;
      cursor: pointer;
    }

    .unique-registration-wrapper .unique-input-box.button input:hover {
      background: #0e4bf1;
    }

    .unique-registration-wrapper form .unique-text h3 {
      color: #333;
      width: 100%;
      text-align: center;
    }

    .unique-registration-wrapper form .unique-text h3 a {
      color: #4070f4;
      text-decoration: none;
    }

    .unique-registration-wrapper form .unique-text h3 a:hover {
      text-decoration: underline;
    }
  </style>
	</head>


	<body 
	class="container navigation" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);width: 98.85vw;height: 70px;padding-top: 10px;">

<div class="navbar-header page-scroll">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
			<i class="fa fa-bars"></i>
		</button>
  <a class="navbar-brand js-scroll-triggr" href="http://localhost/hms/hospital//index.php"  style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif; font-size: 30px; color: white"><h5 style="color: white;"><i class="fa-solid fa-hospital-user" aria-hidden="true"></i>METROPOLITAN  HOSPITAL</h5></a>
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
	
	
<div	class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post" onSubmit="return valid();">
						<fieldset>
						<legend style="text-align: center; font-size: 24px; color: #4070f4; margin-bottom: 20px;">
    <span style="background-color: #fff; padding: 0 10px;">
        Sign Up
    </span>
</legend>

							<p>
								Enter your personal details below:
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="age" placeholder="age" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone" placeholder="phone" required>
							</div>
							<div class="form-group">
								<label class="block">
									Gender
								</label>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
								</div>
							</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control"  id="password_again" name="password_again" placeholder="Password Again" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="user-login.php">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="submit">
    <i class="fa fa-arrow-circle-right"></i> Submit
</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> </span>. <span>METROPOLITAN HOSPITAL.</span>
					</div>

				</div>






				
			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>
	<!-- end: BODY -->
</html>