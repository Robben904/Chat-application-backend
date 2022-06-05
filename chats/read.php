<?php
header("Access-Control-Allow-Methods: POST");
include "../conn.php";
$response = array();

$sql = "";
$row = array();

$user1 = $_GET['sender'];
$user2 = $_GET['receiver'];

// this is multiple movies
$sql = "SELECT * FROM chats WHERE (sender ='$user1' AND receiver='$user2') OR (sender ='$user2' AND receiver ='$user1')";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
$response[0] = $row;
echo json_encode($response[0], JSON_PRETTY_PRINT);