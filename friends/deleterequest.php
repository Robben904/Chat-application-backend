<?php
header("Access-Control-Allow-Methods: POST");
include "../conn.php";
$id = $_GET['id'];

// this is multiple movies
$sql = "DELETE FROM friends WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
