<?php

session_start();


$user = "root";
$pass = "";
$server = "localhost";
$dbname= "storedb";


try{
    $conn= new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);

} catch(PDOException $e){
    echo "error" . $e->getMessage();
}

?>