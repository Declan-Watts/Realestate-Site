<?php
//TODO: Comment on this Page

include_once '../../../php/config.php';

function upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp) {
  if (in_array($ext, $valid_extensions)) {
    $path = $path . strtolower($final_image);
    if (move_uploaded_file($tmp, $path)) {
    }
  }
}

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
$description = str_replace("'", "", $description);

$img = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
$errorimg = $_FILES["image"]["error"];
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
$path = '../img/property_thumb/';
$db_path = 'dashboard/assets/img/property_thumb/';
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$final_image = rand(1000, 1000000) . $img;
$final_image = strtolower($final_image);
$db_path = $db_path . strtolower($final_image);

upload_image($ext, $valid_extensions, $path, $final_image, $db_path, $tmp);
$query = "INSERT INTO `Houses` (`House_ID`, `Status`, `Bedrooms`, `Landarea`, `Bathrooms`, `Garage`, `Carparks`, `Dinning`, `Lounge`, `Thumbnail`, `SaleType`, `Description`, `Region`, `City`, `Suburb`, `Closing_Date`, `Listing_Date`, `Addr`, `Post`) VALUES (NULL, 'For Sale', $Bedrooms, $LArea, $Bathrooms, $Garage, $CarPark, $Dinning, $Lounge, '$final_image', '$SaleType', '$description', '$Region', '$City', '$Suburb', '$CloseDate', CURRENT_TIMESTAMP, '$Address', $Postcode);";

if (mysqli_query($db, $query)) {
  $query = "SELECT @House_ID:=MAX(House_ID) FROM Houses;";
  $result = mysqli_query($db, $query);
  if ($row = mysqli_fetch_assoc($result)) {
    $house_id = $row['@House_ID:=MAX(House_ID)'];
    $query = "INSERT INTO Agent_Houses (Agent_ID, House_ID) VALUES ($agent_sel, $house_id);";
    if (mysqli_query($db, $query)) {
      echo "New Entry Success";
    } else {
      echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
  }
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($db);
}
