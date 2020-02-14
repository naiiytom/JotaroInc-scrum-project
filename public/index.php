<?php
    include_once './api/config/dbconnector.php';

    $database = new Database();
    $db = $database->getConnection();
?>