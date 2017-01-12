<?php
	session_start();
	include 'koneksi.php'; 	// include = menambahkan/mengikutkan file, setting koneksi ke database
	
	$nama = $_POST['nama']; 
	$alamat = $_POST['alamat']; 
	$divisi = $_POST['divisi'];
	
	
	$result = $mysqli->query("INSERT INTO `pegawai` (`id_pegawai`, `nama`, `alamat`, `id_divisi`) VALUES (NULL, '".$nama."', '".$alamat."', '".$divisi."');");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: pegawai.php');
	}
?>