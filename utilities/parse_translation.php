<?

// 1. save using firefox
// 2. put in the tmp directory

// francais http://www.mechon-mamre.org/f/ft/ft0101.htm
// english  http://www.mechon-mamre.org/p/pt/pt0101.htm
// onquelos http://www.mechon-mamre.org/i/t/u/up0101.htm


$dirs = scandir("./tmp");
$t = array();
$t2 = array();
$all = array();

    foreach ($dirs as $file)
    {	
       if ( substr($file,0,2) == "up" && !is_dir($file) && $file != "." && $file != "..")
       {

           $data = file_get_contents("./tmp/".$file);
	   	   echo "read file /tmp/{$file}\n<br/>";
	   
           unset($t);
	   	   $dom = new DOMDocument;
           $dom->loadHTML( $data );
           foreach( $dom->getElementsByTagName( 'tr' ) as $tr )
           {
              $i = 1;
	      	  foreach( $tr->getElementsByTagName( 'td' ) as $td )
              {
		  			if ($i == 1)
		    			$o = substr($td->nodeValue,0,strpos($td->nodeValue,","));
                  	else if ($i == 2)
		  			{
                    	 $t[]=substr(strstr($td->nodeValue," "), 1);
		     			 $t2[$o][]=$t[count($t)-1];
		     			 echo $t[count($t)-1];
		     			 echo "<br/>";
		  			}
                  	$i++;
	      	  }
	   	   }
	   
	   	   $all[]=$t;
	   	   echo "write file /source/{$file}<br/>";
	   	   file_put_contents("./source/{$file}", json_encode($t));
       }
    }
    
    file_put_contents("./source/upall", json_encode($all));
    echo "parsing completed ".count($all)." prakim founded";
    

?>