 <?php
 	//connect ke database

 	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "ngomongo";

	$con = mysqli_connect($server, $username, $password, $database) or die("Gagal lho");
?> 