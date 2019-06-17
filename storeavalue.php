<?php

header("Content-Type: application/json");
$legacyFile = "database.txt";
$file = "database.json";

if (file_exists($legacyFile) && !file_exists($file)) {
    rename($legacyFile, $file);
}

if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($_REQUEST['tag']) || !isset($_REQUEST['value'])) {
    die("Not Allowed");
}
$tag = $_REQUEST['tag'];
$value = trim($_REQUEST['value']);

$f = fopen($file, 'r');
$data = fgets($f);
fclose($f);

$parsedData = json_decode($data, true);
$parsedData[$tag] = $value;

$f = fopen($file, 'w') or die("Can't open file");
fwrite($f, json_encode($parsedData));
fclose($f);

$result = array("STORED", $tag, $value);
echo json_encode($result);

?>
