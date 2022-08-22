

<?php 
session_start();
$_SESSION ['$var']=0;
session_destroy();
header("location:login.php");
 ?>