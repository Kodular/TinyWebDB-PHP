<?php

$file = "database.txt";

if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($_REQUEST['tag']) || !isset($_REQUEST['value'])) {
    die("Not Allowed");
}
$tag = $_REQUEST['tag'];
$value = trim($_REQUEST['value']);

$file = "database.txt";
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