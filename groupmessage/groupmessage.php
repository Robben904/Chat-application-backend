<?php
include('../conn.php');

// data we get from the client
//change here

$sender = $_POST['sender'];
$time = $_POST['time'];
$message = $_POST['message'];



// array to store the response
$response = array();

// this will hold the name of the image if any
$upload_name = "";

// check if the file has any data
if (isset($_FILES['file']) == "") {
    // there is no data in the file
    array_push($response, array("File" => "No File selected"));
} else {
    // there is some data in the file

    $file_name = $_FILES['file']['name']; // name of the file
    $file_tmp_name = $_FILES['file']['tmp_name']; // temporary name of the file
    $file_error = $_FILES['file']['error']; //
    // check if there are any error in the file
    if ($file_error > 0) {
        // return file error response
        array_push($response, array("File" => "Error While uploading"));
    } else {
        // we have a valid file
        // generating a name for the file
        $file_random_name = rand(1000, 1000000) . "-" . $file_name;

        $upload_name = $file_random_name;

        // replacing all the inconsistant symbols in the file name
        $upload_name = preg_replace('/\s+/', '-',  $upload_name);

        // now we have file and a unique file name
        // uploading file to the server in the filder
        if (move_uploaded_file($file_tmp_name, 'files/' . $upload_name)) {

            //change here
            $sql = "INSERT INTO chats (id,sender,time,message) 
                VALUES (Null,:sender,:time,:message,:file)";                       //change here

            $stmt = $conn->prepare($sql);

            $stmt->execute(
                [
                    //change here
                    ':sender' => $sender,
                    ':time' => $time,
                    ':message' => $message,

                ]
            );
            array_push($response, array("Status" => "Data Uploaded"));
        } else {
            array_push($response, array("File" => "Failed to Upload data to directory"));
        }
    }
}
// giving the response in json encoded format
echo (json_encode($response[0]));
