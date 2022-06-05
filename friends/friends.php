<?php
include('../conn.php');

// data we get from the client
$useroneid = $_POST['useroneid'];
$usertwoid = $_POST['usertwoid'];
$date = $_POST['date'];
$accepted = $_POST['accepted'];



// array to store the response
$response = array();

$sql = "INSERT INTO showrooms (id,useroneid,usertwoid,date,accepted) 
                VALUES (Null,:useroneid,:usertwoid,:date,:accepted)";
$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        ':useroneid' => $useroneid,
        ':usertwoid' => $usertwoid,
        ':date' => $date,
        ':accepted' => $accepted

    ]
);
array_push($response, array("Status" => "Data Uploaded"));
// giving the response in json encoded format
echo (json_encode($response[0]));
