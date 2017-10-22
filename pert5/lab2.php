<?php

$x = "";

$password = "haha";

if( password_verify($password, $x) ){
	echo "Password Valid"
}else{
	echo "Access Denied"
}
?>