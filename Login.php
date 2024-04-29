<?php


$User_Name = "";
$pass = "";

$host = "localhost";
$username = "root";
$password = "";
$dbname = "Network2";



if ((isset($_POST["User_Name"]) && isset($_POST["Password"]))) {


    $User_Name = $_POST["User_Name"];
    $pass  = $_POST["Password"];

    $db = new mysqli($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        echo "can not connect to Database";
        exit;
    }

    $sql = "SELECT * FROM Users WHERE User_Name=? AND User_Password=?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed";
        exit;
    } else {

        mysqli_stmt_bind_param($stmt, "ss", $User_Name, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $flag = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Yes_php";
            $flag = 0;
            exit;
        }
        if ($flag == 1) {

            echo "No";
        }

        $db->close();

    }


}

?>
