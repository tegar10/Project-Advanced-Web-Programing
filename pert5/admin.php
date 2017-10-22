<?php
session_start();
if($_SESSION[''] != 1){
	header('Location: login.php');
}
?>
<h1>Admin Area</h1>
<h2>Hanya bisa diakses jika sudah login</h2>
