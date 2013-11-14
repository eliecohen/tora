<?php

var_dump($_POST);

//include 'Debug.php'; 

//$t = Zend_Debug::dump(html_entity_decode($_POST['stam'],ENT_QUOTES),'stam',false);
//$data_back = json_decode (stripslashes($_REQUEST['stam']), true);
//stripslashes($_REQUEST['stam'])
//$y = Zend_Debug::dump($data_back,'ttt',false);

//$file = "./mp3/{$_REQUEST['book']}/{$_REQUEST['page']}.txt";
$file = "./mp3/vv.txt";

echo phpinfo();

//$content = html_entity_decode(stripslashes($_REQUEST['stam']),ENT_QUOTES);



file_put_contents ($file, var_dump($_POST));

?>