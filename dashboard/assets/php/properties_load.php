<?php

include_once '../../../php/config.php';

$query = "SELECT Addr, Status, SaleType, Listing_Date, House_ID FROM Houses";
$result = mysqli_query($db, $query);

$return_arr = array(); //Creating the return array

//This is running through the result and applying each result to a variable.
//And then it is adding it to an associative array with Keys and Values
while ($row = mysqli_fetch_assoc($result)) {
  $Addr = $row['Addr'];
  $Status = $row['Status'];
  $SaleType = $row['SaleType'];
  $Listing_Date = $row['Listing_Date'];
  $House_ID = $row['House_ID'];
  array_push($return_arr, array('Addr' => $Addr,
    'Status' => $Status,
    'SaleType' => $SaleType,
    'Listing_Date' => $Listing_Date,
    'House_ID' => $House_ID));
}

//This is encoding it as JSON and then returning it back to the js file.
echo json_encode($return_arr);
