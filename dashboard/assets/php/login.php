<?php
//TODO: Comment on this Page

include_once '../../../php/config.php';

$email = $_POST['email'];
$pswd = $_POST['password'];

$sql = "SELECT U_ID, Pswd, Role FROM Usrs WHERE email = '$email'";

$result = mysqli_query($db, $sql);

$role = '';

if ($result = mysqli_query($db, $sql)) {
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pswd, $row['Pswd'])) {
      $_SESSION['logged_in'] = 'True';
      $_SESSION['Email'] = $email;
      $_SESSION['Role'] = $row['Role'];
      $_SESSION['U_ID'] = $row['U_ID'];
      $result = 'Success';
      if ($row['Role'] == 1) {
        $role = 'Admin';
      } else if ($row['Role'] == 0) {
        $role = 'Pending Verification';
      } else {
        $role = 'User';
      }
    } else {
      $result = 'Password Incorrect';
    }
  } else {
    $result = 'Email Incorrect';
  }
}

$returnarr = ['Result' => $result, 'Role' => $role];
echo json_encode($returnarr);