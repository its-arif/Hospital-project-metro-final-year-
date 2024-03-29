<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href="css/animate.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
 
  <link id="t-colors" href="color/default.css" rel="stylesheet">

  <style >
  .bg-skin {
    background: #0062cc;
    
  }


  .nav>li>a:hover, .nav>li>a:focus {
    text-decoration: none;
    background-color: #251f1f00;
   
}

.btn-skin {
  background-color: #0062cc;
    border-color: #0062cc;
}
.box h4 {
    font-size: 24px;
    color: white;
    font-family: 'IBM Plex Sans', sans-serif;
}
.service-desc h5 {
    margin-bottom: 10px;
     color: white;
    font-family: 'IBM Plex Sans', sans-serif;
}
.fa-stethoscope:before {
  color: white;
}

.fa-h-square:before {
    color: white;
}

.fa-wheelchair:before {
    color: white;
}

.fa-filter:before {
    color: white;
}

.fa-plus-square:before {
    color: white;
}

.fa-user-md:before {
    color: white;
    background: #00ffff2b;
}

.fa-check:before {
    background: #084dbe;
}

.fa-list-alt:before {
    background: #005cd0;
}

.fa-hospital-o:before {
    background: #0eacf0de
}

.fa-heartbeat:before {
    color: white;
}

footer .widget h5 {
    font-size: 20px;
    margin-bottom: 10px;
    text-transform: uppercase;
    color: white;
}

.intro-content {
    
    background:-webkit-linear-gradient(left, #3931af, #00c6ff);
    padding: 200px 0 60px;
}

.btn {
  background-color: DodgerBlue; 
  border: none; 
  color: white; 
  padding: 12px 16px; 
  font-size: 16px; 
  cursor: pointer; 
}


.btn:hover {
  background-color: RoyalBlue;
}

.unique-registration-wrapper form .unique-input-box input[type="email"] {
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

.unique-registration-wrapper form .unique-input-box input[type="email"]:focus,
.unique-registration-wrapper form .unique-input-box input[type="email"]:valid {
  border-color: #4070f4;
}


</style>
</head>


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
            <li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="index.php" style="color: white">HOME</a></li>
            <li class="active" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;"><a href="about.php" style="color: white">ABOUT US</a></li>
            <li><a href="contact.php" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">CONTACT</a></li>
            <li><a href="LOGX.html" style="margin-right: 40px;font-family: 'IBM Plex Sans', sans-serif;color: white">LOG IN</a></li>
              </ul>
        </div>
  
      </div>


  <div id="wrapper">



    <section id="boxes" class="home-section paddingtop-80" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white;font-family: 'IBM Plex Sans', sans-serif;">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.3s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x bg-skin"></i>
                <h4>Patient Logint</h4>
               
                  <a href=" backend/user-login.php" class="btn btn-skin btn-lg" style="background:white;color:#006ccf">LOGIN <i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.5s">
              <div class="box text-center">

                <i class="fa fa-user-md fa-3x bg-skin"></i>
                <h4>Doctors login</h4>
                

                <a href=" backend/doctor" class="btn btn-skin btn-lg" style="background:white;color:#006ccf">LOGIN<i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.7s">
              <div class="box text-center">
                <i class="fa fa-user fa-3x bg-skin"></i>
                <h4>Admin Login</h4>
              
                  <a href=" backend/admin" class="btn btn-skin btn-lg" style="background:white;color:#006ccf">lOGIN <i class="fa fa-angle-right"></i></a>
                </p>
              </div>
            </div>
          </div>


           
        
          </div>
          </div>
        </div>
      </div>

    </section>


    <section id="service" class="home-section nopadding paddingtop-60" style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white" style="height: 80%;" >
      <div class="container">
    
            <div class="row">
              <div class="col-sm-6 col-md-6">
                <div class="wow fadeInLeft" data-wow-delay="0.2s">
                  <img src="img/dummy/img-6.png" class="img-responsive" alt="" />
                </div>
              </div>
              <div class="col-sm-3 col-md-3">
    
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <div class="service-box">
                    <div class="service-icon">
                      <span class="fa fa-stethoscope fa-3x" style="color:#0062cc"></span>
                    </div>
                    <div class="service-desc">
                      <h5 class="h-light">Medical checkup</h5>
                      <p>Undergo a comprehensive medical checkup tailored to your needs.</p>
                    </div>
                  </div>
                </div>

                
                <div class="wow fadeInRight" data-wow-delay="0.2s">
                  <div class="service-box">
                    <div class="service-icon">
                      <span class="fa fa-wheelchair fa-3x" style="color:#0062cc"></span>
                    </div>
                    <div class="service-desc">
                      <h5 class="h-light">Nursing Services</h5>
                      <p>Receive dedicated nursing care that caters to your individual requirements.</p>
                    </div>
                  </div>
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.3s">
                  <div class="service-box">
                    <div class="service-icon">
                      <span class="fa fa-plus-square fa-3x" style="color:#0062cc"></span>
                    </div>
                    <div class="service-desc">
                      <h5 class="h-light">Pharmacy</h5>
                      <p>Visit our pharmacy offering a wide range of medications and healthcare products. Get expert advice on prescriptions and over-the-counter medicines.</p>
                    </div>
                  </div>
                </div>


                </div>
              <div class="col-sm-3 col-md-3">
    
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <div class="service-box">
                    <div class="service-icon">
                      <span class="fa fa-h-square fa-3x" style="color:#0062cc"></span>
                    </div>
                    <div class="service-desc">
                      <h5 class="h-light">Gyn Care</h5>
                      <p>Experience specialized care for women's health needs. Our gynecologists provide comprehensive services, from routine checkups to advanced treatments.</p>
                    </div>
                  </div>
                </div>

                </div>
              <div class="col-sm-3 col-md-3">
    
                <div class="wow fadeInRight" data-wow-delay="0.1s">
                  <div class="service-box">
                    <div class="service-icon">
                      <span class="fa fa-h-square fa-3x" style="color:#0062cc"></span>
                    </div>
                    <div class="service-desc">
                      <h5 class="h-light">Gyn Care</h5>
                      <p>Experience specialized care for women's health needs. Our gynecologists provide comprehensive services, from routine checkups to advanced treatments.</p>
                    </div>
                  </div>
                </div>


                             
                </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>Metropolitan Hospital </h5>
                    <p>
                      
                    </p>
                    <ul>
                      <li>
                        <span class="fa-stack fa-lg">
                      <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                    </span> Monday - Saturday, 8am to 10pm
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                      <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                    </span> +880 08 904 711
                      </li>
                      <li>
                        <span class="fa-stack fa-lg">
                      <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                    </span> Contact@Metrohospital.com
                      </li>
    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4">
                <div class="wow fadeInDown" data-wow-delay="0.1s">
                  <div class="widget">
                    <h5>Our location</h5>
                    <p>Pirer bazar, Sylhet - Tamabil Hwy, Bateshwar 3100</p>
    
                  </div>
                </div>



</footer>
    
    
      </div>
    
    
    

    </body>
    </html>
           