<?php
//TODO: Comment on this Page

include_once '../../../php/config.php';

$house_id = $_POST['house_id'];
$Bedrooms = $_POST['Bedrooms'];
$LArea = $_POST['LArea'];
$Bathrooms = $_POST['Bathrooms'];
$Garage = $_POST['Garage'];
$CarPark = $_POST['CarPark'];
$Dinning = $_POST['Dinning'];
$Lounge = $_POST['Lounge'];
$agent_sel = $_POST['agent_sel'];
$SaleType = $_POST['SaleType'];
$CloseDate = $_POST['CloseDate'];
$Address = $_POST['Address'];
$Suburb = $_POST['Suburb'];
$City = $_POST['City'];
$Postcode = $_POST['Postcode'];
$Region = $_POST['Region'];
$description = $_POST['description'];

$query = "UPDATE `Houses` SET
`Status` = 'For Sale',
`Bedrooms` = $Bedrooms,
`Landarea` =  $LArea,
`Bathrooms` = $Bathrooms,
`Garage` = $Garage,
`Carparks` = $CarPark,
`Dinning` = $Dinning,
`Lounge` =  $Lounge,
`SaleType` = '$SaleType',
`Description` = '$description',
`Region` = '$Region',
`City` = '$City',
`Suburb` = '$Suburb',
`Closing_Date` = '$CloseDate',
`Addr` = '$Address',
`Post` = '$Postcode'
WHERE `House_ID` ='$house_id' ";
mysqli_query($db, $query);