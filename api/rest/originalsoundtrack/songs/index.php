<?php

spl_autoload_register(function ($class) {
  include "../../../../" . $class . '.class.php';
});

use LiveSchach\OriginalSoundTrack;

header('Content-Type: application/json');

$request = $_GET;

$servername = "localhost";
$username = "OstServiceUser";
$password = "automationIsKing01";

$conn = new PDO("mysql:host=$servername;dbname=OstCoverService", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$databaseRequest = $conn->prepare("select * from OriginalSoundTracks");
if (array_key_exists("id", $request)) {
  $id = $request["id"];
  $databaseRequest = $conn->prepare("select * from OriginalSoundTracks where id = $id");
  $databaseRequest->execute();
  $result = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);

  $databaseRequest = $conn->prepare("select * from Songs where id = $id");
  $databaseRequest->execute($id);
  $songs = $databaseRequest->fetchAll(PDO::FETCH_ASSOC);
} else {
  header('Content-Type: text/html');
  http_response_code(400);
  $errorPage = file_get_contents("../../../../400.html");

  $errorPage = str_replace("{{ERRMSG}}", "You fucking teapot didn't add a ID. This only works with specified IDs because my server is shit, plz don't kill it", $errorPage);

  echo $errorPage;
  exit;
}

if (empty($result)) {
  $result = ["error" => "ID not found"];
} else {
  $resultCopy = $result;
  $result = array();
  foreach ($resultCopy as $item) {
    $song = new OriginalSoundTrack($item["id"], $item["name"], $item["videoGame"], $item["releaseYear"], $songs);
    $result[$item["id"]] = $song;
  }
}

$result = json_encode($result);

echo $result;