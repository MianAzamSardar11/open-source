<?php
// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

// Database connection check
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
