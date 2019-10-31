<?php
//TODO: Comment on this Page

include_once 'config.php';

$return_arr = array();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'True') {
  if (isset($_SESSION['wishlist'])) {
    for ($i = 0; $i < count($_SESSION['wishlist']); $i++) {
      array_push($return_arr, $_SESSION['wishlist'][$i]);
    }
  } else {
    $email = $_SESSION['Email'];
    $sql = "SELECT House_ID FROM Wishlist WHERE Email = '$email'";
    $result = mysqli_query($db, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['House_ID'];
      array_push($return_arr, array('ID' => $id));
      array_push($_SESSION['wishlist'], $id);
    }
  }
} else if (isset($_SESSION['wishlist'])) {
  for ($i = 0; $i < count($_SESSION['wishlist']); $i++) {
    array_push($return_arr, $_SESSION['wishlist'][$i]);
  }
} else {
  array_push($return_arr, 'empty');
}

echo json_encode($return_arr);