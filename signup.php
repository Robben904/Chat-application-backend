<?php
header("Access-Control-Allow-Methods: POST");
include "conn.php";


$date = $_POST['date'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bio = $_POST['bio'];
$notificationid = $_POST['notificationid'];
$dateofbirth = $_POST['dateofbirth'];
$profileimage = $_POST['profileimage'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$password = $_POST['password'];
$chats = $_POST['chats'];




$chkSql = "SELECT email FROM profiles WHERE email = '$email'";
$emstmt = $conn->prepare($chkSql);
$emstmt->execute();
$response = array();
if ($emstmt->rowCount() > 0) {
    $response[0] = array(
        'status' => 'The account with the email and username or already exists.'
    );
    echo json_encode($response[0], JSON_PRETTY_PRINT);
} else {
    $sql = "INSERT INTO profiles (id,date,username,email,phone,bio,notificationid,dateofbirth,profileimage,chats,gender,password,address) VALUES 
    (NULL,:date,:username,:email,:phone,:bio,:notificationid,:dateofbirth,:profileimage,:chats,:gender,:password,:address)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(
        [
            ':date'=>$date,
            ':username' => $username,
            ':email' => $email,
            ':phone' => $phone,
            ':bio' => $bio,
            ':notificationid' => $notificationid,
            ':dateofbirth' => $dateofbirth,
            ':profileimage' => $profileimage,
            ':chats' => $chats,
            ':gender' => $gender,
            ':address' => $address,
            ':password' => $password,
            
            
        ]
    );
    $response[0] = array(
        'status' => 'Account created Successfully.'
    );
    echo json_encode($response[0], JSON_PRETTY_PRINT);
}
