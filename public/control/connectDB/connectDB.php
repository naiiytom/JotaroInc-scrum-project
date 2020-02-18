<?php
$servername = "localhost";
$username = "20S1_g3";
$password = "V6b8dR48";

try {
    $conn = new PDO("mysql:host=$servername;dbname=20S1_g3", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>