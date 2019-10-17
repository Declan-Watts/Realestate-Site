<?php

include_once '../../../php/config.php';

$query = "SELECT Agent_ID, Agent_Name FROM Agents";
$result = mysqli_query($db, $query);

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['Agent_ID'];
  $name = $row['Agent_Name'];
  array_push($return_arr, array('id' => $id,
    'name' => $name));
}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);
