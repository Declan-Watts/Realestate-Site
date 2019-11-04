<?php

include_once 'config.php';
$id = $_GET['id'];

for ($i = 0; $i < count($_SESSION['wishlist']); $i++) {
  if ($id == $_SESSION['wishlist'][$i]) {
    array_splice($_SESSION['wishlist'], $i, 1);
  }
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 'True') {
  $email = $_SESSION['Email'];
  $sql = "DELETE FROM Wishlist WHERE Email = '$email' && House_ID = $id";
  mysqli_query($db, $sql);
}
