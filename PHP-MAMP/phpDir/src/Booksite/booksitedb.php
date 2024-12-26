<?php
$host = "db";
$dbname = "Booksite";
$user = "root";
$pass = "lionPass";


$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  return "connection successful";
}
