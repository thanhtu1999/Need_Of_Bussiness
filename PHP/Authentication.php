
<<<<<<< HEAD

<div class="ShowError" align="center" style=" border-radius: 30px; text-align: center; width: 300px; height: 150px; background: #8E8B8B; color: white; margin: 0 auto;">
	<h1> Thông Báo !!!</h1>
	<br>
	<?php

//session_start();
// if(!isset($_SESSION["loggedin"])){
// header('Location:..Login.html');
// exit();
// }
=======
session_start();
 if(!isset($_SESSION["loggedin"])){
 header('Location:Login.html');
 exit();
 }
>>>>>>> db4c4648e78bde41f97736e07dad2c3b5fb6d12c

if(!isset($_POST['Username'],$_POST['Password'])){
    die('Vui lòng nhập User và Password');
}
//Ket noi Database
$Database_host ='localhost';
$Database_user ='root';
$Database_pass = '';
$Database_name = 'need_of_bussiness';
$con = mysqli_connect($Database_host,$Database_user,$Database_pass,$Database_name) or die ('Kết nối thất bại');

$username = mysqli_real_escape_string($con, $_POST['Username']);
$password = mysqli_real_escape_string($con, $_POST['Password']);

$query = "SELECT Password FROM account WHERE ID='$username'";
$results = mysqli_query($con, $query);

<<<<<<< HEAD
if (mysqli_num_rows($results) == 0) {
	echo "Tai khoan khong ton tai";
=======
if (mysqli_num_rows($results) == 1) {
    $_SESSION["Username"] = $username;
    header('Location:../Home.html');
>>>>>>> db4c4648e78bde41f97736e07dad2c3b5fb6d12c
}
if(mysqli_num_rows($results) == 1){
	while($row = mysqli_fetch_assoc($results)) {
		if($row['Password'] == $_POST['Password']){
			$_SESSION["Username"] = $username;
			$_SESSION["Type"] = $row['type'];
			header('Location:../Home.html');
		}else {
    		echo "Mat khau khong dung";
//   			header('Location:../Login.html');
		}
	}
}
?>
	<br>	
	<button onClick="location.href='../login.html'" type="button" style="width: 50px;
																		 height: 20px; margin-top: 20px; background: none;
																		 border: 1px solid #F7F6F6"> Ok</button>
</div>