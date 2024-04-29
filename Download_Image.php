<?php

$img_Name="";
$filename = "";
$img_dir = "C:/xampp/htdocs/HTTP_Project/picture/";


if(isset($_REQUEST['Image_Name'])) {

    $img_Name = $_REQUEST['Image_Name'];
    $filename = $img_dir . $img_Name;


    if (file_exists($filename)) {


        $ImageInfo = getimagesize($filename);
        switch ($ImageInfo[2]) {
            case IMAGETYPE_JPEG:
                header("Content-Type: image/jpeg");
                break;

            case IMAGETYPE_GIF:
                header("Content-type: image/gif");
                break;

            case IMAGETYPE_PNG:
                header("Content-Type: image/png");
                break;

            default:
                break;
        }


        header('Content-Length:' . filesize($filename));

      readfile($filename);
 }
}