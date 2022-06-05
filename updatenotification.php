<?php
header("Access-Control-Allow-Methods: POST");
include "conn.php";
$response = array();
$row = array();
$id = $_GET['id'];
$notifId = $_GET['notificationid'];
// this is multiple movies
$sql = "UPDATE profiles set notificationid='$notifId' where id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();