<?php

include_once 'config.php'; //Including the database connect config

$sql = 'SELECT H.Bedrooms, H.Bathrooms, H.Garage, H.Dinning, H.Lounge, H.Thumbnail, H.SaleType, H.Addr
FROM Houses AS H
WHERE H.Status = "For Sale"'; //SQL statement to select the data from the database
$result = mysqli_query($db, $sql); //getting the data from the database, $db is db connection, $sql is the sql

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $Bedrooms = $row['Bedrooms'];
  $Bathrooms = $row['Bathrooms'];
  $Garage = $row['Garage'];
  $Dinning = $row['Dinning'];
  $Lounge = $row['Lounge'];
  $Thumbnail = $row['Thumbnail'];
  $SaleType = $row['SaleType'];
  $Addr = $row['Addr'];
  array_push($return_arr, array('Bedrooms' => $Bedrooms,
    'Bathrooms' => $Bathrooms,
    'Garage' => $Garage,
    'Dinning' => $Dinning,
    'Lounge' => $Lounge,
    'Thumbnail' => $Thumbnail,
    'SaleType' => $SaleType,
    'Addr' => $Addr));
}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);