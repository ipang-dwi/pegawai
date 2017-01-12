<?php
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$nama = $_POST['nama']; 
	$alamat = $_POST['alamat']; 
	$divisi = $_POST['divisi'];
	
	
	$result = $mysqli->query("UPDATE `pegawai` SET `nama` = '".$nama."', `alamat` = '".$alamat."', `id_divisi` = '".$divisi."' WHERE `id_pegawai` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: pegawai.php');
	}
?>