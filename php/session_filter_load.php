<?php

include_once "config.php";

$returnarr = array();

array_push($returnarr, array('region' => $_SESSION['region'],
  'city' => $_SESSION['city'],
  'bedrooms' => $_SESSION['Bedrooms'],
  'bathrooms' => $_SESSION['Bathrooms']));

echo json_encode($returnarr);
