<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newsportal";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

// Select database
$db_selected = mysql_select_db($dbname, $conn);

if (!$db_selected) {
    die("Could not select database '" . $dbname . "': " . mysql_error());
}
?>
