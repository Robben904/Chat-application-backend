<?php
include('../conn.php');

// data we get from the client
//change here

$useroneid = $_POST['useroneid'];
$usertwoid = $_POST['usertwoid'];
$date = $_POST['date'];



if ($useroneid == $usertwoid) {
    $response[0] = array(
        'status' => " cannot send to self"
    );
    echo (json_encode($response[0]));

    // giving the response in json encoded
} else {
    $sql = "SELECT * FROM friends WHERE (useroneid ='$useroneid' AND usertwoid='$usertwoid') OR (useroneid ='$usertwoid' AND usertwoid ='$useroneid')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $response[0] = $row;
    if ($stmt->rowCount() > 0) {
        
        if ($row[0]['accepted'] == 'true') {
            $response[0] = array(
                'status' => "Already Friends"
            );
            echo (json_encode($response[0]));
        } else {
            $response[0] = array(
                'status' => " Already contains"
            );
            echo (json_encode($response[0]));
        }
    } else {
        // array to store the response
        $response = array();
        $sql = "INSERT INTO friends (id,useroneid,usertwoid,date,accepted) 
                VALUES (Null,:useroneid,:usertwoid,:date,'false')";                       //change here

        $stmt = $conn->prepare($sql);

        $stmt->execute(
            [
                //change here
                ':useroneid' => $useroneid,
                ':usertwoid' => $usertwoid,
                ':date' => $date,

            ]
        );
        array_push($response, array("status" => "Friend Request Sent"));
        // giving the response in json encoded format
        echo (json_encode($response[0]));
    }
}
