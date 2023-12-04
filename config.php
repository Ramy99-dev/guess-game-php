<?php

$servername = "localhost";
$database = "exam-tp";
$username = "root";
$password = "";

try{
   $pdo = new PDO("mysql:host=$servername;dbname=$database",$username , $password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $err)
{
    echo "Error: " . $e->getMessage();
}
?>