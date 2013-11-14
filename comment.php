<?php

$book = $_GET['b'];
$perek= $_GET['p'];

//http://localhost/1/comment.php?b=1&p=6

//$file = "./comments/{$book}_{$perek}.js";
$file = "./source/comment/{$book}_{$perek}.json";

if (file_exists($file))
{
	$json=file_get_contents($file);
	//$data = json_decode($json,true);
	//print_r($json);
	//print_r(json_encode($data));
	//exit(0);
	$data = $json;
}
else
{
	$data = NULL;
}

header('Content-Type: application/json; charset=utf8');
header('Cache-Control: no-cache, must-revalidate');
echo json_encode($data);

?>

