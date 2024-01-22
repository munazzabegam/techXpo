<?php

$conn = new mysqli("localhost", "u214227927_PaceFest", "PaceFest2023", "u214227927_paceFest");
// $conn = new mysqli("localhost", "root", "", "paceFest");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
