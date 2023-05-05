<?php 
session_start();
//include('util.php');
if ( isset($_COOKIE["userCookie"]) && !empty($_COOKIE["userCookie"]) ) {
    //$cookieEmail = $_COOKIE["userCookie"];
    //$decEmail = decrypt( $cookieEmail , "key_123" );
    //echo $cookieEmail;
    //$_SESSION["user"] = $decEmail;
}

$email = "";
if ( isset($_SESSION["user"]) ) {
    $email = $_SESSION["user"];
}else {
    header("Location: index.php");
    exit();
}

?>