<?php

spl_autoload_register(function ($class) {
  include "../../../../" . $class . '.class.php';
});

use LiveSchach\OriginalSoundTrack;
use LiveSchach\Song;

header('Content-Type: application/json');

$request = $_GET;

$servername = "localhost";
$username = "OstServiceUser";
$password = "automationIsKing01";

$conn = new PDO("mysql:host=$servername;dbname=OstCoverService", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (array_key_exists("id", $request)) {
  $id = $request["id"];
  $databaseRequest = $conn->prepare("select * from OriginalSoundTracks where id in(?)");
  $databaseRequest->execute([$id]);
  $result = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);

  $databaseRequest = $conn->prepare("select id,name,artist,duration from Songs where ost_id in(?)");
  $databaseRequest->execute([$id]);
  $songs = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);
} else {
  http_response_code(400);

  $result = [
    "timestamp" => date(DateTime::ATOM),
    "status" => 400,
    "error" => "Bad Request",
    "message" => "Request malformed. ID is Required (to keep the load manageable)",
    "path" => "api/rest/originalsoundtrack/songs"
  ];

  echo json_encode($result);
  exit;
}

if (empty($result)) {
  $result = [
    "timestamp" => date(DateTime::ATOM),
    "status" => 404,
    "error" => "Not found",
    "message" => "Requested ID was not found",
    "path" => "api/rest/originalsoundtrack/songs"
  ];
} else {
  $tracknumber = 1;
  $songsCopy = $songs;
  $songs = array();
  foreach ($songsCopy as $item){
    $song = new Song($item["id"], $item["name"], $item["artist"], $tracknumber, $item["duration"]);
    $songs[$item["id"]] = $song;
    $tracknumber ++;
  }

  $resultCopy = $result;
  $result = array();
  foreach ($resultCopy as $item) {
    $ost = new OriginalSoundTrack($item["id"], $item["name"], $item["videoGame"], $item["releaseYear"], $songs);
    $result[$item["id"]] = $ost;
  }
}

$result = json_encode($result);

echo $result;