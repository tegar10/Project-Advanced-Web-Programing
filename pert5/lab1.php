<?php

$string = "rahasiakita";;

$encrypted = password_hash(
$string, PASSWORD_BCRYPT) ;
echo $encrypted;

// Cara 2
$salt = ""
$encry2 = crypt($string)
?>
