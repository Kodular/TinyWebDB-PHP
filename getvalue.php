<?php

parse_str($_SERVER['QUERY_STRING'], $POST);
if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($POST['tag']) || !isset($POST['value'])) {
    die("Not Allowed");
}
$tag = trim($POST['tag']);

$file = "database.txt";
$f = fopen($file, 'r');
$data = fgets($f);
fclose($f);

$result = array("VALUE", $tag, $data[$tag]);
echo json_encode($result); 

?>