<?php 
	session_start();
	require 'db-connect.php';

	//cek data terisi gak
	if ($_POST['username'] && $_POST['email'] && $_POST['password'] && $_POST['confPassword']) {

		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cekValidUser =1;

		$queCekUser = "SELECT * FROM akun";
		$resultCekUser = mysqli_query($con, $queCekUser);

		while ($data=mysqli_fetch_assoc($resultCekUser)) {
			if ($data['username'] == $username) {
				$cekValidUser = 0;
				break 1;
			}
		}

		if($cekValidUser){
			$queInsert = "INSERT INTO akun(username, email, pass)
				VALUES ('".$username."','".$email."','".$password."')";
			
			mysqli_query($con, $queInsert) or die ('asulah');

			$_SESSION["cekLogin"] = 0;
			header('location:sign-in.php?succes=1');
		}else{
			header('location:register.php?err=2');
		}
	}else{
		header('location:register.php?err=1');
	}
	

 ?>