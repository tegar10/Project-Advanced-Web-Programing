<?php
session_start();
if($_SESSION[''])
//data yang berasal dari form
$user = $_POST['username'];
$pass = $_POST['password'];

$koneksi = mysqli_connect('localhost', 'root', '', 'kalbis_web');

$query   = "SELECT * FROM users WHERE username = '$user' ";
$hasil   = mysqli_query($koneksi, $query);
$row     = mysqli_fetch_assoc($hasil);

if($row
	&&
	password_verify($pass, $row['password']){
		$_SESSION['login'] = 1;
		header('Location: admin.php');
	}else{

	}
$
)


?>