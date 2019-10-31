<?php
//TODO: Comment on this Page

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 'True' || $_SESSION['Role'] != 1) {
  echo 'intruder';
} else {
  echo 'welcome';
}