<?php


$hn = "localhost";
$un = "moezr_admin";
$pw = "u74Y]NN.dI-(YAlq";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>

