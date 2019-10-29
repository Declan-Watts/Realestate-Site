<?php

include_once 'config.php';

$city = $_GET['category'];

$sql = "SELECT DISTINCT Suburb FROM Houses WHERE City = '$city'";

$result = mysqli_query($db, $sql);

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $suburb = $row['Suburb'];
  array_push($return_arr, array('sub' => $suburb));
}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);