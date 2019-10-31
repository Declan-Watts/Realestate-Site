<?php

include_once 'config.php'; // include the database connect config

$query = "SELECT * FROM Houses ORDER BY RAND() LIMIT 1"; // selects all from 'houses' where House_ID = id
$result = mysqli_query($db, $query); // returns result

$return_arr = array(); // create the return array

while ($row = mysqli_fetch_assoc($result)) { // fetches all rows from 'houses' where House_ID = id
  $Bedrooms = $row['Bedrooms']; // makes 'Bedrooms' row content into a variable
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
  $Thumbnail = $row["Thumbnail"];
  $House_ID = $row["House_ID"];

  array_push($return_arr, array( // adds below text to empty array "$return_arr"
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
    'Description' => $Description,
    'Thumbnail' => $Thumbnail,
    'House_ID' => $House_ID));

}

$query = "SELECT * FROM Agent_Houses WHERE House_ID ='$House_ID' "; // selects all from 'Agent_Houses' where House_ID = id
$result = mysqli_query($db, $query); // returns result

while ($row = mysqli_fetch_assoc($result)) {
  $Agent_ID = $row['Agent_ID'];
}

$query = "SELECT * FROM Agents WHERE Agent_ID ='$Agent_ID' ";
$result = mysqli_query($db, $query); // returns result

while ($row = mysqli_fetch_assoc($result)) {
  $Agent_ID = $row['Agent_ID'];
  $Company_ID = $row['Company_ID'];
  $Agent_Thumbnail = $row['Thumbnail'];
  $Agent_Name = $row['Agent_Name'];
  $Agent_Work = $row['Agent_Work'];
  $Agent_Mobile = $row['Agent_Mobile'];

  array_push($return_arr, array(
    'Agent_ID' => $Agent_ID,
    'Company_ID' => $Company_ID,
    'Agent_Thumbnail' => $Agent_Thumbnail,
    'Agent_Name' => $Agent_Name,
    'Agent_Work' => $Agent_Work,
    'Agent_Mobile' => $Agent_Mobile));

}

$query = "SELECT * FROM Company WHERE Company_ID ='$Company_ID' ";
$result = mysqli_query($db, $query); // returns result

while ($row = mysqli_fetch_assoc($result)) {
  $Company_Thumbnail = $row['Company_Thumbnail'];
  $Company_Name = $row['Company_Name'];

  array_push($return_arr, array(
    'Company_Thumbnail' => $Company_Thumbnail,
    'Company_Name' => $Company_Name));

}
echo json_encode($return_arr); // encodes array as .json and sends back to js

?>