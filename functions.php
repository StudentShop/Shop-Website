<?php            
global $classONOFF, $title;

function titlePage($title)
{
	echo $title;
}

function navclass($menuitem)
{
	$filestring = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	$pos = strpos($filestring, $menuitem);
	// Note the use of ===.  Simply == would not work as expected
	// because the position of 'a' was the 0th (first) character.
	if ($pos === false) {
			$classONOFF = 'class="off" ';
			echo "";   
	} else {
		   $classONOFF='class="on"';
		   echo $classONOFF; 
	}
}


function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}


?> 