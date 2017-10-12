<?php
//1. Koneksi
include("koneksi.php");
//data dari form
$id = $_POST['id'];
$ket = mysqli_real_escape_string($db, $_POST['ket']);
//2. Query
$query = "UPDATE kategori
		  SET keterangan = ''
		  WHERE id = ";

header('Location: kategori.php')
?>