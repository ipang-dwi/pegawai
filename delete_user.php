<?php 
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$result = $mysqli->query("delete from user where id_user = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: user.php');
	}
?>