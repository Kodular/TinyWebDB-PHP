<?php 

$tag = trim($_POST['tag']); 
$value = trim($_POST['value']); 

$file = "database.txt";
$f = fopen($file, 'r');
$data = fgets($f);
fclose($f);

$parsedData = json_decode($data, true);
$parsedData[$tag] = $value;
$data = json_encode($parsedData);

$f = fopen($file, 'w') or die("can't open file");
fwrite($f, str_replace('"', '', $data));
fclose($f);

$result = array("STORED", $tag, $value);
echo json_encode($result);

?> 