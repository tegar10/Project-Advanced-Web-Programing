<?php //filename: proses_dosen.php

include("db.php");

if($_GET['action'] == "add") {
	// 2. Query
	$query = "INSERT INTO dosen (nama, kode_dosen) VALUES('$_POST[nama]', '$_POST[kode dosen]')";
}else if($_GET['action'] == "edit") {
	// 2. Query
	$query = "UPDATE dosen
			  SET 	nama 		= '$_POST[nama]',
			  	  	kode_dosen	= '$_POST[kode dosen]'
			  WHERE id = $_POST[id]";
}else if($_GET['action'] == "delete") {
	$query = "DELETE FROM dosen
			  WHERE id=$_GET[id]";
}

mysqli_query($koneksi, $query);

// REDIRECT ke template.php
header('Location: template.php?page=mahasiswa');