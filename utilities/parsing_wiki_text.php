<?

// 1. open wikisource in mobile mode 
// http://he.m.wikisource.org/wiki/%D7%91%D7%A8%D7%90%D7%A9%D7%99%D7%AA_%D7%91
// 2. saved the whole page as html only
// 3. put in the tmp directory


$dirs = scandir("./tmp/text");

$ppp = array();
$t2  = array();
$all = array();

error_reporting(E_ERROR | E_PARSE);

    foreach ($dirs as $file)
    {	
       if ( substr($file,0,1) != "." && !is_dir($file) && $file != "." && $file != "..")
       {
		   //if ($file != "3_1.html")
		   	//	continue;
       	
       	   $fileOutput = str_replace(".html", ".json", $file);
       	
       	   unset($all);
           $data = file_get_contents("./tmp/text/".$file);
	   	   echo "read file /tmp/text/{$file}\n<br/>";
	   
           unset($t);
	   	   $dom = new DOMDocument;
           $dom->loadHTML( '<?xml encoding="UTF-8">'.$data );
           
           $i = 1;
           foreach ($dom->getElementsByTagName('div') as $element) 
           { 
           	                 	
           	if (strpos($element->getAttribute('class'), 'NavContent') !== false) 
           	{
           		if ($i == 3 || $i== 5)
           		{
           			$i++;
           			continue;
           		}   

           		/*
           		 *   i == 1   hebrew wihtout nikoud
           		 *   i == 2   hebrew with nikoud
           		 *   i == 4   hebrew with nikoud and taamim
           		 * 
           		 */
           		
           		echo "################## {$i}######################<br/>";
           		unset($pieces);
           		unset($ppp);
           		
           		foreach ($element->childNodes as $item)
           		{
           			$j = 1;
           			//echo "-1-->Type ".$item->nodeType. " | nodeName =".$item2->nodeName."<br/>";
           			if ($item->nodeType)
           			{
           				foreach ($item->childNodes as $item2)
           				{           					
           					foreach ($item2->childNodes as $item3)
           					{
           						if ($item3->nodeName != "br" && $item3->nodeType == 3 )  // for furst and second
           						{
           							echo "*{$j}*".$item3->C14N()."*<br/>";
           							$string = trim($item3->C14N());
           							$pieces = explode(" ", $string);
           							//foreach ($pieces as $piece)
           							//	echo " ---> ".$piece."<br/>";
									//echo "<br/>"; 	
									$ppp[]=$pieces;								           										
           							$j++;
           						}
           					}           					
           				}
           			}
           		}
           		
           		//echo $i."_".$file." generated<br/>";
           		//file_put_contents("./source/".$i."_".$file, json_encode($ppp));
           		
           		$all[]=$ppp;
           		
           		$i++;
           	} // if div is NavContent           	
           }//for each div  

           if (count($all)>0)
           {
           		echo "/source/text/".$file." generated (all)<br/>";
           		file_put_contents("./source/text/".$fileOutput, json_encode($all));
           }           
           
       }// if relevant file
    }// for each file   

?>