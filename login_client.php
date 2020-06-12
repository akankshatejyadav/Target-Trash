<?php
 session_start();
  if(isset($_SESSION['name']))
        
?>

<?php 
$mysql_host='localhost';
$mysql_user='root';
$conn = @mysqli_connect($mysql_host,$mysql_user);
if(!$conn)
{
  die ("connection failed");
}
if( !@mysqli_select_db($conn,'trashtarget_db'))
{
  echo "databse not selected";
}

  $nam= $_POST['username'];
  $pass = $_POST['pass'];
  $query = " SELECT c_username ,  c_password FROM signup_client WHERE c_username='$nam' AND c_password='$pass'";
  $result = @mysqli_query($conn,$query);
  
  $rowcount = @mysqli_num_rows($result);
  if($rowcount == 1 )
  {
    $_SESSION['name'] = $nam; 
    $x= $_SESSION['name'];   
    header("Location: dashclient.php");
         
  //   echo "your username and password is correct";
  }
  else{
      $msg = '<p style="margin-top:300px;margin-left:380px;color:red;cursor:pointer;font-size:60px;"> Invalid username or password </p>';
      echo $msg; 
      }
  ?>