<?php

// $conn = new mysqli("localhost", "u214227927_icest", "Icest2023", "u214227927_icest");
$conn = new mysqli("localhost", "root", "", "icest24");


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
