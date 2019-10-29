<?php
include_once 'php/config.php';

$veri = $_GET['id'];

$sql = "UPDATE `Usrs` SET `Role` = '2' WHERE Verification = '$veri'";

mysqli_query($db, $sql);

header('Location: dashboard/login.html');