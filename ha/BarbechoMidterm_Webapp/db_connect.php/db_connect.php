<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "project_webapp";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>