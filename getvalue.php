<?php

header("Content-Type: application/json");
$legacyFile = "database.txt";
$file = "database.json";

if (file_exists($legacyFile) && !file_exists($file)) {
    rename($legacyFile, $file);
}

if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($_REQUEST['tag'])) {
    die("Not Allowed");
}
$tag = trim($_REQUEST['tag']);

$f = fopen($file, 'r');
$data = json_decode(fgets($f), true);
fclose($f);

$result = array("VALUE", $tag, ($data[$tag]==null?"":$data[$tag]));
echo json_encode($result);

?>
