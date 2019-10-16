<?php

include_once '../../../php/config.php';

function upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp) {
  if (in_array($ext, $valid_extensions)) {
    $path = $path . strtolower($final_image);
    if (move_uploaded_file($tmp, $path)) {
    }
  }
}

$agent_name = $_POST['agent_name'];
$company_sel = $_POST['company_sel'];
$work = $_POST['work'];
$mobile = $_POST['mobile'];

$img = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
$errorimg = $_FILES["image"]["error"];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
$path = '../img/agent_thumb/';
$db_path = 'dashboard/assets/img/agent_thumb/';
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$final_image = rand(1000, 1000000) . $img;
$db_path = $db_path . strtolower($final_image);

upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp);
$query = "INSERT INTO `Agents`(`Agent_ID`, `Company_ID`, `Thumbnail`, `Agent_Name`, `Agent_Work`, `Agent_Mobile`) VALUES (null, '$company_sel', '$final_image', '$agent_name', '$work', '$mobile');";

if (mysqli_query($db, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($db);
}
