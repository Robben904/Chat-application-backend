<?php
include('../conn.php');

// data we get from the client
//change here

$userid = $_POST['userid'];
$payment = $_POST['payment'];
$date = $_POST['date'];
$khaltino = $_POST['khaltino'];
$remarks = $_POST['remarks'];


// array to store the response
$response = array();
$sql = "INSERT INTO payments (id,userid,payment,date,khaltino,remarks) 
        VALUES (Null,:userid,:payment,:date,:khaltino,:remarks)";                       //change here

$stmt = $conn->prepare($sql);

$stmt->execute(
    [
        //change here
        ':userid' => $userid,
        ':paymenr' => $payment,
        ':date' => $date,
        ':khaltino' => $khaltino,
        ':remarks' => $remarks,
        


    ]
);
array_push($response, array("status" => "Thank you for donation :)"));
// giving the response in json encoded format
echo (json_encode($response[0]));