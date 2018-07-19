<?php

header("Content-Type: application/jsonrequest");
$file = "database.txt";

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