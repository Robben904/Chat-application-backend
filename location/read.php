<?php
header("Access-Control-Allow-Methods: POST");
include "../conn.php";
$response = array();

$sql = "";
$row = array();

// this is multiple movies
$sql = "SELECT l.*, p.username, p.profileimage, p.email,p.phone,p.address FROM location l JOIN profiles p on l.userid = p.id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
$response[0] = $row;
echo json_encode($response[0], JSON_PRETTY_PRINT);