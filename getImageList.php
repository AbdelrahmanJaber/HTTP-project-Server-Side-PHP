<?php

$host = "localhost";
$username = "root";
$password = "";
$db_Name = "Network2";

$Str="";

$conn = new mysqli($host, $username, $password, $db_Name);

if (mysqli_connect_errno()) {
    echo "can not connect to Database";
    exit;
}


$sql = "SELECT * FROM Images";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $Str=$Str.$row["Image_Name"]. "//";
    }
}

mysqli_close($conn);

echo $Str;