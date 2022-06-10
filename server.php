<?php
include __DIR__ . "/database.php";
$genre = $_GET["genre"];
$filteredArray = [];
if (empty($genre)) {
  $filteredArray = $database;
} else {
  foreach($database as $card) {
    if($card["genre"] == $genre) {
      $filteredArray[] = $card;
    }
  }
}
$database_json = json_encode($filteredArray);
header("Content-Type: application/json");
echo $database_json;
?>