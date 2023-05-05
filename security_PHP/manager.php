<?php 
include('secur.php');
if ( isset($_GET["page"]) && !empty($_GET["page"]) ) {
    $page = $_GET["page"];
    if ( $page == "dashboard" ) {
        include("dashboard.php");
    }else if ($page == "settings") {
        include("settings.php");
    }else if ($page == "customers") {
        include("customers.php");
    }else {
        header("Location: 404.php");
        exit();
    }
}else {
    include("dashboard.php");
}

?>