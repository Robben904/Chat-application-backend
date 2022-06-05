<?php
$servername = 'localhost';
$username = 'root';
$password ='';
$dbname = 'mytest';

try {
    //creating the connection to database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    //echo "Successfully connected";
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
