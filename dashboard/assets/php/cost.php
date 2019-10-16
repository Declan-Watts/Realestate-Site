<?php
/**
 * This code will benchmark your server to determine how high of a cost you can
 * afford. You want to set the highest cost that you can without slowing down
 * you server too much. 8-10 is a good baseline, and more is good if your servers
 * are fast enough. The code below aims for ≤ 50 milliseconds stretching time,
 * which is a good baseline for systems handling interactive logins.
 */

// INSERT INTO `Usrs` (`U_ID`, `Usr_Name`, `Pswd`, `Firstname`, `Surname`, `Email`, `Role`, `Verification`) VALUES (NULL, 'Bsl3r', '$2y$11$AqRL3MrBBIQYL493G8qFgOGDYaqX6p2abKCAVE52Ud7Ij1sn8KRHe', 'Declan', 'Watts', 'declan.drumming@gmail.com', '1', NULL)
$timeTarget = 0.05; // 50 milliseconds

$cost = 11;
$hash = '$2y$11$AqRL3MrBBIQYL493G8qFgOGDYaqX6p2abKCAVE52Ud7Ij1sn8KRHe';

if (password_verify('Admin1234', $hash)) {
  echo 'Password is valid!';
}

echo "Appropriate Cost Found: " . $hash;
?>