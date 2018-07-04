<?php

parse_str($_SERVER['QUERY_STRING'], $POST);
if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($POST['tag'])) {
    die("Not Allowed");
}
$tag = trim($POST['tag']);

$file = "database.txt";
$f = fopen($file, 'r');
$data = json_decode(fgets($f));
fclose($f);

$result = array("VALUE", $tag, $data[$tag]);
echo json_encode($result); 

?>