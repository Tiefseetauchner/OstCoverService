<?php

spl_autoload_register(function ($class) {
  include "../../../" . $class . '.class.php';
});

header('Content-Type: application/json');

use LiveSchach\Song;

$request = $_GET;

$servername = "localhost";
$username = "OstServiceUser";
$password = "automationIsKing01";

$conn = new PDO("mysql:host=$servername;dbname=OstCoverService", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$databaseRequest = $conn->prepare("select * from songs");
if (array_key_exists("id", $request)) {
  $id = explode(",", $request["id"]);
  $in = str_repeat('?,', count($id) - 1) . '?';
  $databaseRequest = $conn->prepare("select * from songs where id in($in)");
  $databaseRequest->execute($id);
} else {
  $databaseRequest->execute();
}

$result = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);

if (empty($result)) {
  $result = [
    "timestamp" => date(DateTime::ATOM),
    "status" => 404,
    "error" => "Not found",
    "message" => "Requested ID was not found",
    "path" => "api/rest/song"
  ];
  http_response_code(404);
} else {
  $resultCopy = $result;
  $result = array();
  foreach ($resultCopy as $item) {
    $song = new Song($item["id"], $item["name"], $item["artist"], -1, $item["duration"]);
    $result[$item["id"]] = $song;
  }
  http_response_code(200);
}

$result = json_encode($result);

echo $result;