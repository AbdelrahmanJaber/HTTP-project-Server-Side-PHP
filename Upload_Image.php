<?php

$host = "localhost";
$username = "root";
$password = "";
$db_Name = "Network2";



$Image_Name = addslashes($_FILES['myFile']['name']);
//$Image_Content = addslashes(file_get_contents($_FILES['study_file_toIRB']['tmp_name']));
$Image_Type = addslashes($_FILES['myFile']['type']);

echo $Image_Name;

$conn = mysqli_connect($host, $username, $password, $db_Name);

if (mysqli_connect_errno()) {
    echo "can not connect to Database";
    exit;


}

$sql = "INSERT INTO Images (Image_Name,Image_Type) VALUES ('$Image_Name','$Image_Type')";

$result = $conn->query($sql);

if ($result) {

    move_uploaded_file($_FILES['myFile']['tmp_name'],"picture/$Image_Name");
    echo "Sent correctly";
}

else {
    echo "ERROR !!!" . "<br" . $conn->error;
}







