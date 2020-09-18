<?php 
session_start();
$_SESSION=[];
session_destroy();
session_unset();
setcookie('apaan', '', time()-3600);
setcookie('coba', '', time()-3600);
header("Location:../../index.php");
?>