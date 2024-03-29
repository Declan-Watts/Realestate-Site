<?php

include_once 'mailsend.php';
include_once 'config.php';

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "xJaquar@gmail.com";
$email_subject = "Contact Submission from ddtuitions.com";

function died($error) {
  // your error code can go here
  echo "We are very sorry, but there were error(s) found with the form you submitted. ";
  echo "These errors appear below.<br /><br />";
  echo $error . "<br /><br />";
  echo "Please go back and fix these errors.<br /><br />";
  die();
}

// validation expected data exists
if (!isset($_POST['firstName']) ||
  !isset($_POST['lastName']) ||
  !isset($_POST['email']) ||
  !isset($_POST['phoneNumber']) ||
  !isset($_POST['message'])) {
  died('We are sorry, but there appears to be a problem with the form you submitted.');
}

$first_name = $_POST['firstName']; // required
$last_name = $_POST['lastName']; // required
$email_from = $_POST['email']; // required
$telephone = $_POST['phoneNumber']; // not required
$comments = $_POST['message']; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email_from)) {
  $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
}

$string_exp = "/^[A-Za-z .'-]+$/";

if (!preg_match($string_exp, $first_name)) {
  $error_message .= 'The First Name you entered does not appear to be valid.<br />';
}

if (!preg_match($string_exp, $last_name)) {
  $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
}

if (strlen($comments) < 2) {
  $error_message .= 'The Comments you entered do not appear to be valid.<br />';
}

if (strlen($error_message) > 0) {
  died($error_message);
}

$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type", "bcc:", "to:", "cc:", "href");
  return str_replace($bad, "", $string);
}

$email_message .= "First Name: " . clean_string($first_name) . "\n";
$email_message .= "Last Name: " . clean_string($last_name) . "\n";
$email_message .= "Email: " . clean_string($email_from) . "\n";
$email_message .= "Phone Number: " . clean_string($telephone) . "\n";
$email_message .= "Message: " . clean_string($comments) . "\n";

// create email headers
$headers = 'From: ' . $email_from . "\r\n" .
'Reply-To: ' . $email_from . "\r\n" .
'X-Mailer: PHP/' . phpversion();

Mail::sendMail($email_subject, $email_message, $email_to);

$query = "INSERT INTO `Contact_Submissions`(`First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Message`) VALUES ('$first_name', '$last_name', '$email_from' , '$telephone', '$comments')";
if (mysqli_query($db, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($db);
}