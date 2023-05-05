<?php 
session_start();
session_unset();
setcookie("userCookie", "", -1);
header("Location: index.php");
exit();
?>