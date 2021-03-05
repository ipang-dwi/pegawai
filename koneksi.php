<?php
	// (nama server, user, password, database)
	$mysqli = new mysqli("localhost", "root", "", "pegawai");
	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
