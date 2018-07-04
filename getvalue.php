<?php

$tag = trim($_POST['tag']);

$file = "database.txt";
$f = fopen($file, 'r');
$data = fgets($f);
fclose($f);

$result = array("VALUE", $tag, $data[$tag]);
echo json_encode($result); 

?>