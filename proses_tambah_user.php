<?php
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$user = $_POST['username']; 
	$pass = $_POST['password']; 
	$level = $_POST['level'];
	
	
	$result = $mysqli->query("INSERT INTO `user` (`id_user`, `user`, `pass`, `level`) VALUES (NULL, '".$user."', '".$pass."', '".$level."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: user.php');
	}
?>