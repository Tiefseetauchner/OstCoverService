<?php


namespace LiveSchach;


use Cassandra\Set;

class OriginalSoundTrack
{
  var string $id;
  var string $name;
  var string $videoGame;
  var int $releaseYear;
  var Set $songList;
}