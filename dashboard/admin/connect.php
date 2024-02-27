<?php

// Create connection
$conn = new mysqli('localhost', 'bvrmtennis', 'bvrmtennis#1980', 'bhimavaramtennis');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
