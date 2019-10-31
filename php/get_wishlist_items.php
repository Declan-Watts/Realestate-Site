<?php
//TODO: Comment on this Page

include_once 'config.php';
$return_arr = array();

for ($i = 0; $i < count($_SESSION['wishlist']); $i++) {
  $id = $_SESSION['wishlist'][$i];
  $sql = "SELECT Addr, Thumbnail FROM Houses WHERE House_ID = $id";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_assoc($result);
  array_push($return_arr, array("House_ID" => $id,
    "Name" => $row['Addr'],
    "Thumbnail" => $row['Thumbnail']));
}

echo json_encode($return_arr);