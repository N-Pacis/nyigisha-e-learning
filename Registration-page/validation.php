<?php
session_start();
$_SESSION['error-message'] = "";
require('../utils/connection.php');
mysqli_select_db($con, 'Nyigisha_db');
$name = $_POST['school'];
$pass = $_POST['password'];
$pass1 =md5($pass);
$s = " select * from registration where school_name = '$name' && password = '$pass1'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num ==1){
   $_SESSION['username'] = $name; 
   header('location:../dashboard/dashboard-page/welcome.php');
}else{
   $_SESSION['error-message'] = "Invalid email or password";
   header('location:login.php');
}
?>