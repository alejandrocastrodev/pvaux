<?php
$project = "pvaux/";
include $_SERVER['DOCUMENT_ROOT']."/".$project."context.php"; //init context

$files = array_filter(scandir($pb_style), function($fileName){
	global $pb_style;
    return is_file($pb_style.$fileName) and (substr($fileName, -5) == '.less');
});

echo json_encode(array_values($files));

?>