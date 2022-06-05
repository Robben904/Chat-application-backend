<?php
header("Access-Control-Allow-Methods: POST");
include "../conn.php";


$id = $_POST['id'];
$userid = $_POST['userid'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$updated_date = $_POST['updated_date'];




$chkSql = "SELECT * FROM location WHERE userid = $userid";
$emstmt = $conn->prepare($chkSql);
$emstmt->execute();
$response = array();
if ($emstmt->rowCount() > 0) {
    $response[0] = array(
        'status' => 'The account with the email and username or already exists.'
    );
    echo json_encode($response[0], JSON_PRETTY_PRINT);
} else {
    $sql = "INSERT INTO location (id,userid,latitude,longitude,updated_date) VALUES 
    (NULL,:userid,:latitude,:longitude,:updated_date)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        [
        
            ':userid' => $userid,
            ':latitude' => $latitude,
            ':longitude' => $longitude,
            ':updated_date' => $updated_date,
            
            
        ]
    );
    $response[0] = array(
        'status' => 'Location updated Successfully.'
    );
    echo json_encode($response[0], JSON_PRETTY_PRINT);
}
