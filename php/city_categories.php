<?php

include_once 'config.php';

$region = $_GET['category'];

$sql = "SELECT DISTINCT City FROM Houses WHERE Region = '$region'";

$result = mysqli_query($db, $sql);

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $city = $row['City'];
  array_push($return_arr, array('city' => $city));
}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);