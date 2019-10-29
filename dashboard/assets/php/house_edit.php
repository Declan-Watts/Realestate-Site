<?php

include_once '../../../php/config.php';

$House_ID = $_GET['house_id'];
$query = "SELECT * FROM Houses WHERE House_ID ='$House_ID' ";
$result = mysqli_query($db, $query);

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $Bedrooms = $row['Bedrooms'];
  $LandArea = $row['Landarea'];
  $Bathrooms = $row['Bathrooms'];
  $Garage = $row['Garage'];
  $Carparks = $row['Carparks'];
  $Dinning = $row['Dinning'];
  $Lounge = $row['Lounge'];
  $SaleType = $row['SaleType'];
  $Closing_Date = $row['Closing_Date'];
  $Addr = $row['Addr'];
  $Suburb = $row['Suburb'];
  $City = $row['City'];
  $Post = $row['Post'];
  $Region = $row['Region'];
  $Description = $row["Description"];

  array_push($return_arr, array(
    'Bedrooms' => $Bedrooms,
    'Landarea' => $LandArea,
    'Bathrooms' => $Bathrooms,
    'Garage' => $Garage,
    'Carparks' => $Carparks,
    'Dinning' => $Dinning,
    'Lounge' => $Lounge,
    'SaleType' => $SaleType,
    'Closing_date' => $Closing_Date,
    'Addr' => $Addr,
    'Suburb' => $Suburb,
    'City' => $City,
    'Post' => $Post,
    'Region' => $Region,
    'Description' => $Description));

}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);

?>