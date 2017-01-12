<?php
	session_start();

	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$user	= $_POST['username']; // menangkap username
	$pass	= $_POST['password']; // menangkap password
	
	// echo $user." - ".$pass; // cek apakah username dan password terparsing..
	
	// membuat query untuk mencari data yang sesuai login
	$result = $mysqli->query("SELECT * FROM user where user = '".$user."' and pass = '".$pass."'");
	// echo "SELECT * FROM user where user = '".$user."' and pass = '".$pass."'";
	// cek apakah ada data yang sesuai
	if($result->num_rows > 0){
		// echo "User ada";
		while($row = $result->fetch_assoc()) {
			$_SESSION['user'] = $row['user']; 
			$_SESSION['pass'] = $row['pass'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['login'] = 'login';
		}
		if($_SESSION['level']=='admin'){
			header('Location: dashboard_a.php');
		}
		else{
			header('Location: dashboard_u.php');
		}
	}
	else{
		// echo "User tidak ada";
		$_SESSION['msg'] = 1;
		header('Location: login.php');
	}
?>