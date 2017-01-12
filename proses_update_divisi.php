<?php
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$div = $_POST['divisi'];
	
	
	$result = $mysqli->query("UPDATE `divisi` SET `divisi` = '".$div."' WHERE `id_divisi` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: divisi.php');
	}
?>