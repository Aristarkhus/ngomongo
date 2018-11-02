<?php
	session_start();
	require 'db-connect.php';

	//cek data terisi gak
	if ($_POST['username'] && $_POST['email'] && $_POST['password'] && $_POST['confPassword'] && $_FILES['gambar']['name']) {
		if (($_POST['password'] != $_POST['confPassword'])) {
			header('location:register.php?err=3');
		} else {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$uploadFile = "Foto/".$username.".jpg";
		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $uploadFile)) {

		}else{

		}

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
			$queInsert = "INSERT INTO akun(username, email, pass, image)
				VALUES ('".$username."','".$email."','".hash('sha256', $password)."','".$uploadFile."')";

			mysqli_query($con, $queInsert) or die ('asulah');

			$_SESSION["cekLogin"] = 0;
			header('location:sign-in.php?succes=1');
		}else{
			header('location:register.php?err=2');
		}
	}
	}else{
		header('location:register.php?err=1');
	}


 ?>
