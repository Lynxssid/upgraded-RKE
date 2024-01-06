<?php

session_start();

$user = $_GET['user'];
$pass = $_GET['pass'];

if(($user == 'admin' AND $pass == 'admin') || ($user == 'kelompok3' AND $pass == '3asik')){
	$_SESSION['user'] = $user;
	header('location: home.php');
}
else{
	header("location:tugasbesar.php?login_gagal");
}
?>