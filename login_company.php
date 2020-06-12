<?php
$con = mysql_connect('localhost','root');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
if( !@mysqli_select_db($conn,'cosmolearndb'))
{
	echo "databse not selected";
}

$email = $_POST['email'];
$password = $_POST['pass'];
$q = "SELECT c_email,c_password FROM signup_company where c_email = '$email' && c_password = '$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if ($num==1) {
	$row=mysqli_fetch_array($result);
	$_SESSION['username']=$row['name'];
	 header("Location: dash_comp.php");
}
else{
	 $msg = '<p style="margin-top:300px;margin-left:380px;color:red;cursor:pointer;font-size:60px;"> Invalid email or password </p>';
      echo $msg; 
	 header("Location: login_company_page.php");	
}

?>