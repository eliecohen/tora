<?
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

$vowels = array(".", ",", ";", "-",":");
$words = array();
$all   = array();


function my_strlen($s) {
    // Return mb_strlen with encoding UTF-8.
    return mb_strlen($s, "UTF-8");
}


$dirs = scandir("./tmp");

//print_r ($dirs);

    foreach ($dirs as $file)
    {
       if ( substr($file,0,2) == "t0" && !is_dir($file) && $file != "." && $file != "..")
       {
          echo " parse {$file} <br/>"; 
          
          unset ($words);     
          $data = file_get_contents("./tmp/".$file);
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
                //echo "|".count_words($new)."|".$new."<br/>";
                $pieces = explode(" ", $new);
                foreach ($pieces as $item2)
                {    
                    if (my_strlen($item2)>1 && $item2 != "&nbsp" && strpos($item2,"{")===false)
                    {
                        //echo $item2."<br/>";
                        $words[$passouk][]=$item2;
                    }
                }
            }
            $i++;
            if (isset($words[$passouk]))
            {
                //echo "index[".$passouk."]=>".count($words[$passouk]);
                $passouk++;
            }
          }
         
         $all[]=$words;
          file_put_contents("./source/{$file}", json_encode($words));
       }
    }
    
    echo "**************************************************<br/>";
    echo "**************************************************<br/>";
    echo "parsing completed ".count($all)." prakim founded<br/>";
    echo "**************************************************<br/>";
    echo "**************************************************<br/>";
    file_put_contents("./source/alltext", json_encode($all));
    
    ?>
    