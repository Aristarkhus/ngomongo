<?php
	session_start();
	require 'db-connect.php';

	if ($_POST["username"] && $_POST["password"] && $_POST["socket"]) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$socket = $_POST["socket"];

		$id = mysqli_query($con, "SELECT id FROM akun WHERE username ='".$username."'");
		$id_arr = mysqli_fetch_assoc($id);

		$_SESSION['id'] = $id_arr['id'];
		if($id_arr){
			$cekPass = mysqli_query($con, "SELECT * FROM akun WHERE id ='".$id_arr['id']."'");
			$pass_arr = mysqli_fetch_assoc($cekPass);
			if ($pass_arr['pass'] == hash('sha256', $password)) {
				$_SESSION["cekLogin"] = 1;
				$_SESSION["cekUser"] = $username;

				$sql = "UPDATE akun SET socketID = '".$socket."' WHERE username = '".$username."'";
				mysqli_query($con, $sql) or die ('bajingan');

					header('location:ngomongo-chat.php');
			}else{
				header('location:sign-in.php?err=1');
			}
		}else{
			header('location:sign-in.php?err=1');
		}
	}else{
		header('location:sign-in.php?err=1');
	}
?>
