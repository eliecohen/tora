<?

echo $a=$_GET['q'];
echo $s=$_GET['s'];
echo $p=$_GET['p'];
echo "------------";

$q = (int)$q;

$file = "./tmp/{$q}";

 if (!file_exists($file))
{
    echo "file {$file} not found";
    exit(0);
    
}

$data = file_get_contents($file);
//echo $data;
//exit(0);


//http://www.mechon-mamre.org/i/t/t0101.htm

//$data = file_get_contents("http://www.mechon-mamre.org/i/t/t0".$s.$p.".htm");

//echo $data;
//exit(0);

function count_words($string) {
    // Return the number of words in a string.
    $string= str_replace("&#039;", "'", $string);
    $t= array(' ', "\t", '=', '+', '-', '*', '/', '\\', ',', '.', ';', ':', '[', ']', '{', '}', '(', ')', '<', '>', '&', '%', '$', '@', '#', '^', '!', '?', '~'); // separators
    $string= str_replace($t, " ", $string);
    $string= trim(preg_replace("/\s+/", " ", $string));
    $num= 0;
    if (my_strlen($string)>0) {
        $word_array= explode(" ", $string);
        $num= count($word_array);
    }
    return $num;
}

function my_strlen($s) {
    // Return mb_strlen with encoding UTF-8.
    return mb_strlen($s, "UTF-8");
}

$vowels = array(".", ",", ";", "-",":");

//echo $data;

$words = array();

$data = str_replace(array ("<big>","</big>"),"",$data);

$keywords = preg_split("/[\s,]+/", $data);
$chars = preg_split('/(<[^>]*[^\/]>)/i', $data, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);

$i=0;
$passouk = 0;
foreach ($chars as $item)
{
        
    $new=str_replace($vowels," ",$item);
    $new=iconv("Windows-1255", "UTF-8",$new);

    if (count_words($new)>3 && !strpos($item,"href") && !strpos($item,"script") && !strpos($item,"name") && $i>16 && !strpos($item,"?"))// 
    {
	echo "|".count_words($new)."|".$new."<br/>";
	$pieces = explode(" ", $new);
	foreach ($pieces as $item2)
	{
	    
	    if (my_strlen($item2)>1 && $item2 != "&nbsp" && strpos($item2,"{")===false)
	    {
		echo $item2."<br/>";
		$words[$passouk][]=$item2;
	    }
	}
    }
     $i++;
     if (isset($words[$passouk]))
     {
	echo "index[".$passouk."]=>".count($words[$passouk]);
	$passouk++;
     }
	
    //echo "#####<br/>";
}

//file_put_contents("./source/{$s}{$p}", json_encode($words));

file_put_contents("./source/{$q}", json_encode($words));


//echo "######################------------a";
//print_r($words);
//echo "######################------------b";

                	      	    	
//echo $data;

?>