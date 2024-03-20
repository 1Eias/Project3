<?php
$dbHost = 'localhost';
$dbUsername = 'shami';
$dbPassword = '1234';
$dbName = 'twitter';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>