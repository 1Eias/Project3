<?php

$servername = "localhost";
$username = "username";
$password = "password";


$conn = new PDO("mysql:host=$servername;dbname=twitter", $username, $password);

if(!$conn){
    die("Not Connected");
}
?>