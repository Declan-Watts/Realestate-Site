<?php

include_once 'config.php';
$id = $_GET['id'];

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'True') {
  if (isset($_SESSION['wishlist'])) {
    if (in_array($id, $_SESSION['wishlist'])) {
      echo "found";
    } else {
      array_push($_SESSION['wishlist'], $id);
      $email = $_SESSION['Email'];
      $sql = "INSERT INTO `Wishlist` (`Email`, `House_ID`) VALUES ('$email', $id)";
      mysqli_query($db, $sql);
    }
  } else {
    $_SESSION['wishlist'] = [$id];
    $email = $_SESSION['Email'];
    $sql = "INSERT INTO `Wishlist` (`Email`, `House_ID`) VALUES ('$email', $id)";
    mysqli_query($db, $sql);
  }
} else if (isset($_SESSION['wishlist'])) {
  if (in_array($id, $_SESSION['wishlist'])) {
    echo "found";
  } else {
    array_push($_SESSION['wishlist'], $id);
  }
} else {
  $_SESSION['wishlist'] = [$id];
}

echo 'Wishlist Updated';