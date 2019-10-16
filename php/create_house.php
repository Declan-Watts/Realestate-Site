<?php
include 'php/config.php';
// Random confirmation code
$status = $_POST['status'];
$bedrooms = $_POST['bedrooms'];
$landarea = $_POST['landarea'];
$bathrooms = $_POST['bathrooms'];
$garage = $_POST['garage'];
$carparks = $_POST['carparks'];
$dinning = $_POST['dinning'];
$lounge = $_POST['lounge'];
$thumbnail = $_POST['thumbnail'];
$saleType = $_POST['saleType'];
$description = $_POST['description'];
$region = $_POST['region'];
$city = $_POST['city'];
$suburb = $_POST['suburb'];
$closing_date = $_POST['closing_date'];
$addr = $_POST['addr'];
$post = $_POST['post'];
// Insert data into database

$query = "START TRANSACTION;

SELECT
    @House_ID:=MAX(House_ID)+1
FROM
    Houses;

INSERT INTO
    Houses
    (`House_ID`, `Status`, `Bedrooms`, `LandArea`, `Bathrooms`, `Garage`, `Carparks`,
    `Dinning`, `Lounge`, `Thumbnail`, `SaleType`, `Description`, `Region`,
    `City`, `Suburb`, `Closing_Date`, `Listing_Date`, `Addr`, `Post`)
    VALUES
    (NULL, '$status', $bedrooms, $landarea, $bathrooms, $garage,
    $carparks, $dinning, $lounge, '$thumbnail', '$saleType',
    '$description', '$region', '$city', '$suburb', '$closing_date',
    CURRENT_TIMESTAMP, '$addr', $post);

INSERT INTO Agent_Houses (Agent_ID, House_ID) VALUES (2, @House_ID);

COMMIT;
";

// mysqli_query($db, $query);
echo $query;
// end of if isset()
