<?php

include_once '../../../php/config.php';
$house_id = $_GET['id']; // get the House_ID from URL via address bar

// write an SQL for delete
$query = "DELETE FROM Agent_Houses WHERE House_ID='$house_id' ";
mysqli_query($db, $query); // Executes the SQL query called $query
$query = "DELETE FROM Houses WHERE House_ID='$house_id' "; // SQL for delete
mysqli_query($db, $query); // Executes the SQL query called $query