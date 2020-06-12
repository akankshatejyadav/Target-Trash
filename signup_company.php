<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'trashtarget_db');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$name = $_POST['name'];
$company_name = $_POST['c_name'];
$email = $_POST['email'];
$uname=$_POST['username'];
$password = $_POST['password'];
$pnumber = $_POST['phone'];
$adhar = $_POST['a_card'];
$adr = $_POST['address'];
$lmark=$_POST['landmark'];
$dis = $_POST['district'];
$pcode = $_POST['pincode'];
$q = "insert into signup_company (name,comp_name,email,username,password,phone,adhar_card,address,landmark,district,pincode) values ('$name',$company_name,'$email','$password',$pnumber,$adhar,'$adr','$lmark','$dis',$pcode)";
mysqli_query($con,$q);
mysqli_close($con);

?>