<?php

include_once '../../../php/config.php';

function upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp) {
  if (in_array($ext, $valid_extensions)) {
    $path = $path . strtolower($final_image);
    if (move_uploaded_file($tmp, $path)) {
    }
  }
}

$company_name = $_POST['company_name'];

$img = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
$errorimg = $_FILES["image"]["error"];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
$path = '../img/company_thumb/';
$db_path = 'dashboard/assets/img/company_thumb/';
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$final_image = rand(1000, 1000000) . $img;
$db_path = $db_path . strtolower($final_image);

upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp);
$query = "INSERT INTO `Company`(`Company_ID`, `Company_Thumbnail`, `Company_Name`) VALUES (null, '$final_image', '$company_name');";

if (mysqli_query($db, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($db);
}
