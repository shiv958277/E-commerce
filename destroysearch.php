<?php
session_start();
$search=$_SESSION['search'];
if($search==true)
{
unset($_SESSION['search']);
header("location:index.php");
}
else{
    header("location:index.php");
}
?>