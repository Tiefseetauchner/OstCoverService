<?php
$request = $_GET;


$servername = "localhost";
$username = "OstServiceUser";
$password = "automationIsKing01";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


if (array_key_exists("id", $request)) {
  echo "ID Exists: " . $request["id"];
  $conn->prepare("select * from ");
}