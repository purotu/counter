<?php
// Edit credentials to match your db provider
$servername = "localhost";
$username = "root";
$password = "";
$db = "countdown_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<script>console.log('Connected successfully')</script>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }