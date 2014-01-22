<?php
//it receives names of files without extension to compile 
//it returns an array with done and undone files converted
require "../../resources/lessphp/lessc.inc.php";

if($_POST["files"] != ""){
	$less = new lessc;
	
	//it can receives unique or several filenames
	$files_names = explode(",", $_POST["files"]);
	
	$done = array();
	$undone = array();
	
	foreach($files_names as $f_name) {
		try {
		  // it builds path of input and output
		  $less->compileFile("../style/".$f_name.".less", "../style/".$f_name.".css");
		  array_push($done, "'".$f_name."'");
		} catch (exception $e) {
		  array_push($undone, "'".$f_name."'");
		}
	}

	// it show de result for preocess in de client side
	echo "[[".implode(",", $done)."],[".implode(",", $undone)."]]";

}

?>