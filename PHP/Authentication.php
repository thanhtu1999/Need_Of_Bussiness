<?php
session_start();
	if(!isset($_SESSION["loggedin"])){
		header('Location:Login.html');
		exit();
	}
$Database_host ='localhost';
$Database_user ='root';
$Database_pass = '';
$Database_name = 'bussiness';
$con = mysqli_connect($Database_host,$Database_user,$Database_pass,$Database_name) or die ('Kết nối thất bại');
	if(!isset($_POST['Username'],$_POST['Password'])){
		die('Vui lòng nhập User và Password');
	}
?>