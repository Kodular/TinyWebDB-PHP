<?php 

parse_str($_SERVER['QUERY_STRING'], $POST);
if ($_SERVER['REQUEST_METHOD'] != "POST" || !isset($POST['tag']) || !isset($POST['value'])) {
    die("Not Allowed");
}
$tag = trim($POST['tag']); 
$value = trim($POST['value']); 

$file = "database.txt";
$f = fopen($file, 'r');
$data = fgets($f);
fclose($f);

$parsedData = json_decode($data, true);
$parsedData[$tag] = $value;
$fileData[] = json_encode($parsedData);

$f = fopen($file, 'w') or die("Can't open file");
fwrite($f, str_replace('"', '', json_encode($fileData)));
fclose($f);

$result = array("STORED", $tag, $value);
echo json_encode($result);

?> 