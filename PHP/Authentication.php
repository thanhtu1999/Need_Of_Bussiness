<?php

/*session_start();
 if(!isset($_SESSION["loggedin"])){
 header('Location:Login.html');
 exit();
 }
 */
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

$query = "SELECT * FROM account WHERE ID='$username' AND Password='$password'";
$results = mysqli_query($con, $query);

if (mysqli_num_rows($results) == 1) {
    $_SESSION["Username"] =$username;
    header('Location:../Home.html');
}
else {
    //Dang nhap that bai
    header('Location:../Login.html');
}

?>