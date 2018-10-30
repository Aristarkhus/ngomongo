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
    <title>Ngomongo | Salam aspal gronjal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <link rel="stylesheet" type="text/css" href="fonts/fontawesome-free-5.0.7/web-fonts-with-css/css/fontawesome-all.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <img src="images/logos.png">
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index-signin.php" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="ngomongo-chat.php" class="nav-link">Obrolan</a></li>
            <li class="nav-item"><a href="ngomongo-chat.php" class="nav-link"><?php echo $username ?></a></li>
	          <li class="nav-item"><a href="log-out.php" class="nav-link">Log Out</a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="ftco-menu">
    	<div class="container-fluid">
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-4 chat" id="style-13">
              <input type="text" placeholder="Search" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"></input><button class="btn btn-primary p-3 px-xl-4 py-xl-3">Search</button>
              <br><br>
              <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Chat</a>

                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Grup</a>

                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Contact</a>
              </div><br>
            
              <div class="tab-content ftco-animate" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">  
                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Alvin</span></h3>
                      </div>
                      <div class="d-block">
                        <p>opo e risss.. syuu...</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Alvin</span></h3>
                      </div>
                      <div class="d-block">
                        <p>opo e risss.. syuu...</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Alvin</span></h3>
                      </div>
                      <div class="d-block">
                        <p>opo e risss.. syuu...</p>
                      </div>
                    </div>
                  </div>
                </div>  

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">  
                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>FTI UKDW</span></h3>
                      </div>
                      <div class="d-block">
                        <p>64 Member</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>DESPRO'16</span></h3>
                      </div>
                      <div class="d-block">
                        <p>101 Member</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>UKDW'18</span></h3>
                      </div>
                      <div class="d-block">
                        <p>342 Member</p>
                      </div>
                    </div>
                  </div>  
                </div>

                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab"> 
                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Abednego</span></h3>
                      </div>
                      <div class="d-block">
                        <p>Online / Offline</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Abednego</span></h3>
                      </div>
                      <div class="d-block">
                        <p>Online / Offline</p>
                      </div>
                    </div>
                  </div>

                  <div class="pricing-entry d-flex ftco-animate">
                    <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                    <div class="desc pl-3">
                      <div class="d-flex align-items-center">
                        <h3><span>Abednego</span></h3>
                      </div>
                      <div class="d-block">
                        <p>Online / Offline</p>
                      </div>
                    </div>
                  </div>                        
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-8">
              <div class="row">
                <div class="col-md-12 right-header-contentChat" id="style-13">
                  <ul>
                    <li>
                      <div class="rightside-left-chat">
                        <span><i class="fa fa-circle" aria-hidden="true"></i> Jack <small>10:00 AM,Today</small> </span><br><br>
                        <p>LHA PIYE ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-right-chat">
                        <span> <small>10:00 AM,Today</small>  Intan <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                        <p>piye ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-left-chat">
                        <span><i class="fa fa-circle" aria-hidden="true"></i> Jack <small>10:00 AM,Today</small> </span><br><br>
                        <p>LHA PIYE ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-right-chat">
                        <span> <small>10:00 AM,Today</small>  Intan <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                        <p>piye ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-left-chat">
                        <span><i class="fa fa-circle" aria-hidden="true"></i> Jack <small>10:00 AM,Today</small> </span><br><br>
                        <p>LHA PIYE ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-right-chat">
                        <span> <small>10:00 AM,Today</small>  Intan <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                        <p>piye ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-left-chat">
                        <span><i class="fa fa-circle" aria-hidden="true"></i> Jack <small>10:00 AM,Today</small> </span><br><br>
                        <p>LHA PIYE ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-right-chat">
                        <span> <small>10:00 AM,Today</small>  Intan <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                        <p>piye ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-left-chat">
                        <span><i class="fa fa-circle" aria-hidden="true"></i> Jack <small>10:00 AM,Today</small> </span><br><br>
                        <p>LHA PIYE ?</p>
                      </div>
                    </li>
                    <li>
                      <div class="rightside-right-chat">
                        <span> <small>10:00 AM,Today</small>  Intan <i class="fa fa-circle" aria-hidden="true"></i></span><br><br>
                        <p>piye ?</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 btn right-chat-textbox right-chat-outline-textbox">
                  <input type="text"><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
              </div> 
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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
  <script type="text/javascript">
    $(document).ready(function(){
      var height = $(window).height();
      $('.left-chat').css('height', (height - 92) + 'px');
      $('.right-header-contentChat').css('height', (height - 133) + 'px');
    });
  </script>
    
  </body>
</html>