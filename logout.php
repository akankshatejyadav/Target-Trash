<?php
session_start();
if( isset(  $_POST['sub']  )  )
{
session_destroy();
header('location:home.html');
}
?>