<?php
  session_start();
  require "db-connect.php";
  if (isset($_SESSION["cekUser"]) && isset($_SESSION["cekLogin"])) {
    //kondisi login
    $username = $_SESSION["cekUser"];
    $status = $_SESSION["cekLogin"];
  }else{
    //kondisi belum login
    $username="";
    $status=0;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ngomong'o | Salam aspal gronjal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <img src="images/logos.png">
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="register.php" class="nav-link">Register</a></li>
	        </ul>
	      </div>
		</div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Register</h1>
                <form method="POST" action="db-register.php" enctype='multipart/form-data'>
                  <label>Username</label><br>
                  <input type="text" name='username' id="username" placeholder="Username" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"></input><br>

                  <label>E-mail</label><br>
                  <input type="text" name='email' id="email" placeholder="E-Mail" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"></input><br>

                  <label>Password</label><br>
                  <input type="password" name="password" id="passwd" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3" placeholder="Password"><br>

                  <label>Confirm Password</label><br>
                  <input type="password" name="confPassword" id="confPasswd" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3" placeholder="Confirm Password"><br>

                  <label>Foto</label><br>
                  <input type="file" name="gambar" id="gambar" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3" style="border: hidden;"><br><br>

                  <input type="submit" name="submit" value="Register" class="btn btn-primary p-3 px-xl-4 py-xl-3">

                </form>

            </div>

          </div>
        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            </p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

<?php
  if(isset($_REQUEST['err'])){
    $error = $_REQUEST['err'];
    if($error == 1)
      echo "<script> alert('Data masih ada yang kosong!');</script>";
    else if ($error==2) {
        echo "<script> alert('Username sudah dipakai. Silakan menggunakan username lain');</script>";
      }
    else if ($error==3) {
       echo "<script> alert('confirm password tidak sesuai!');</script>";
    }
  }
 ?>
