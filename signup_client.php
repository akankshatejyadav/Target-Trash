<?php
session_start();
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'trashtarget_db');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$name = $_POST['name'];
$uname = $_POST['username'];
$pnumber = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];

$adr = $_POST['address'];
$lmark=$_POST['landmark'];
$pcode = $_POST['pincode'];

$q = "insert into signup_client (c_name,c_username,c_phone,c_email,c_password,c_adr,c_lmark,c_pcode) values ('$name','$uname',$pnumber,'$email','$password','$adr','$lmark','$pcode')";
mysqli_query($con,$q);
mysqli_close($con);
header("Location: abc.html");
?>