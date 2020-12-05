<?php
$request = $_GET;


$servername = "localhost";
$username = "OstServiceUser";
$password = "automationIsKing01";

$conn = new PDO("mysql:host=$servername;dbname=OstCoverService", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if (array_key_exists("id", $request)) {
  $id = $request["id"];
  $databaseRequest = $conn->prepare("select * from songs where id = '$id'");
  $databaseRequest->execute();

  $result = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);

  if (empty($result)) {
    $result = ["error" => "ID not found"];
  }

  header('Content-Type: application/json');

  $result = json_encode($result);

  echo $result;
}

