<?php

include_once "../../../php/config.php";
include_once 'mailsend.php';
$options = [
  'cost' => 10,
];

$username = $_POST['username'];
$password = password_hash($_POST['password1'], PASSWORD_BCRYPT, $options);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$veri = rand(10, 1000000);

$sql = "SELECT Email FROM Usrs WHERE Email = '$email';";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
  echo "Email Taken";
} else {
  $sql = "INSERT INTO `Usrs` (`U_ID`, `Usr_Name`, `Pswd`, `Firstname`, `Surname`, `Email`, `Role`, `Verification`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$email', '0', '$veri')";
  if (mysqli_query($db, $sql)) {
    echo "User Added";
    $email_subject = 'Account Verification';
    $email_message = " <p>Hi $firstname, </p> <br>
    <br>
    <p>Thank you for creating an account with us, to activate this account please click this link</p>
    <br>
    <a href='school.ddtuitions.com/activate.php?id=$veri'><p>school.ddtuitions.com/activate/</p></a>";
    $email_to = $email;
    Mail::sendMail($email_subject, $email_message, $email_to);
  } else {
    echo "Error";
  }

}
