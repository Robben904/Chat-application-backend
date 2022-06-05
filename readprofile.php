<?php
header("Access-Control-Allow-Methods: POST");
include "conn.php";
$response = array();
$row = array();
$id = $_GET['id'];
// this is multiple movies
$sql = "SELECT * FROM profiles where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$response[0] = $row;
echo json_encode($response[0], JSON_PRETTY_PRINT);
