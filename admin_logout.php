<?php
session_start();
$username=$_SESSION['uname'];
if($username==true)
{
session_unset();
header("location:admin_login.php");
}
else{
    header("location:admin_login.php");
}
?>