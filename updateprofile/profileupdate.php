<?php
include('../conn.php');

// data we get from the client
//change here
$id = $_POST["id"];
$username = $_POST['username'];
$bio = $_POST['bio'];
$dateofbirth = $_POST['dateofbirth'];
$phone = $_POST['phone'];
$image = $_POST['profileimage'];



// array to store the response
$response = array();

// this will hold the name of the image if any
$upload_name = $image;

// check if the file has any data
if (isset($_FILES['file']) == "") {
    // there is no data in the file
    // array_push($response, array("File" => "No File selected"));
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
        if (move_uploaded_file($file_tmp_name, '../profileimages/' . $upload_name)) {

            //change here

        } else {
            array_push($response, array("File" => "Failed to Upload data to directory"));
        }
    }
}
$sql = "UPDATE profiles set username='$username',profileimage='$upload_name', bio='$bio', dateofbirth='$dateofbirth', phone='$phone' WHERE id=$id";                       //change here
$stmt = $conn->prepare($sql);
$stmt->execute();
array_push($response, array("Status" => "Data Uploaded"));
// giving the response in json encoded format
echo (json_encode($response[0]));
