<?php //filename: proses_regis.php

//data dari form_register.php
$username = $_POST['username'];
$password = $_POST['password'];

// enkripsi password
$enc_pass = password_hash($password, PASSWORD_BCRYPT);

// buat koneksi
$koneksi = mysqli_connect
?>