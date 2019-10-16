<?php

$MYSQL_HOST = 'localhost'; //HOST
$MYSQL_USER = 'jaq'; //Username
$MYSQL_PASSWORD = 'XJaquar'; //Password
$MYSQL_DB_NAME = 'Housing'; //My sql database name

// Establish DB connection. The @ means hide any error output
$db = @mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PASSWORD, $MYSQL_DB_NAME) or die("Could not
connect to database");

session_start();