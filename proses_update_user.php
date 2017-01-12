<?php
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$user = $_POST['username']; 
	$pass = $_POST['password']; 
	$level = $_POST['level'];
	
	
	$result = $mysqli->query("UPDATE `user` SET `user` = '".$user."', `pass` = '".$pass."', `level` = '".$level."' WHERE `user`.`id_user` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: user.php');
	}
?>