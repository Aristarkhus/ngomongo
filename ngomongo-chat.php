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
    <?php 
        require "head.php";
     
        require "webSocket.php";
     ?>

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
              <input name="search" type="text" placeholder="Search" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3"></input><button class="btn btn-primary p-3 px-xl-4 py-xl-3" >Search</button>
              <br><br>


              <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Chat</a>

                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Grup</a>

                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Contact</a>
              </div><br>
            
              <div class="tab-content ftco-animate" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-Alvin-tab" data-toggle="pill" href="#v-pills-Alvin" role="tab" aria-controls="v-pills-Alvin" aria-selected="false">
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
                    </a>
                  </div>
                </div>  

                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" id="v-pills-FTI-tab" data-toggle="pill" href="#v-pills-FTI" role="tab" aria-controls="v-pills-FTI" aria-selected="false">  
                      <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/akun-1.jpg);"></div>
                        <div class="desc pl-3">
                          <div class="d-flex align-items-center">
                            <h3><span>FTI</span></h3>
                          </div>
                          <div class="d-block">
                            <p>64 Member</p>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="nav-link" id="v-pills-UKDW-tab" data-toggle="pill" href="#v-pills-UKDW" role="tab" aria-controls="v-pills-UKDW" aria-selected="false"> 
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
                    </a>
                  </div>  
                </div>


                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">  
                  <?php 
                    $noContact = 1000;
                    
                    $query = mysqli_query($con, "SELECT * FROM akun");
                    while($row = mysqli_fetch_assoc($query)){
                  
                      if ($row['username'] == $username) {
                        continue;
                      } else {
                        
                        echo '<a class="nav-link" id="v-pills-'.$noContact.'-tab" data-toggle="pill" href="#v-pills-'.$noContact.'" role="tab" aria-controls="v-pills-'.$noContact.'" aria-selected="false">';
                        $noContact++;
                        ?>
                      <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url(images/akun-1.jpg);">
                        </div>
                        <div class="desc pl-3">
                          <div class="d-flex align-items-center">
                            <h3><span><?php echo $row['username'] ?></span></h3>
                          </div>
                          <div class="d-block">
                            <p>Online / Offline</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  <?php
                      } 
                    }
                   ?>
                   
                  </div>                                        
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-8">

              <div class="tab-content" id="v-pills-tabContent">
                
                <div class="tab-pane fade" id="v-pills-Alvin" role="tabpanel" aria-labelledby="v-pills-Alvin-tab">
                  <div class="row">
                    <div class="col-md-12 right-header-contentChat" id="style-13">
                      <ul id="obrolan">

                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 btn right-chat-textbox right-chat-outline-textbox">
                      <input id="nama" type="hidden" <?php echo 'value="'.$username.'"' ?>></input>
                      <input type="text" id="pesan">
                      <a id="kirim"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                  </div> 
                </div>

                <?php 
                    $noChat = 1000;
                    $query = mysqli_query($con, "SELECT * FROM akun");
                    while($row = mysqli_fetch_assoc($query)){ 

                    echo '
                <div class="tab-pane fade" id="v-pills-'.$noChat.'" role="tabpanel" aria-labelledby="v-pills-'.$noChat.'-tab">';
                    $noChat++;
                ?>
                  <div class="row">
                    <div class="col-md-12 right-header-contentChat" id="style-13">
                      <ul id="obrolan">

                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 btn right-chat-textbox right-chat-outline-textbox">
                      <input id="nama" type="hidden" <?php echo 'value="'.$username.'"' ?>></input>
                      <input type="text" id="pesan">
                      <a id="kirim"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>
                  </div> 
                </div>
                <?php 
                  }
                 ?>

              </div>

            </div>

          </div>
	      </div>
	    </div><
  	</section>  
    
  <?php
    require "footer.php";
    require "tail.php";
   ?>
    
  </body>
</html>