<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

try {
     $db = new PDO("mysql:host=localhost;port=8889;dbname=secur", "root", "root");
} catch ( PDOException $e ){
     print $e->getMessage();
}

/*
$query = $db->query("SELECT * FROM login WHERE username=:username AND password=:password");
$query->bindValue(':username', $username);
$query->bindValue(':password', $password);
$query->execute();
$row_count = $query->rowCount();
*/
?>
