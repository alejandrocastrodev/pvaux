<?php

    if(!isset($project)){
	    $project = "";
	}
    if(!isset($current_page)){
	    $current_page = "Default";
	}

	conf_rel_path();
	$styles = array('general-style', 'buttons', 'feedback');
	
	function conf_rel_path(){
		global $project;
		$current_path_array  = path_to_array(path_at_last_slash());
		$current_path_length = count($current_path_array);
		$project_array       = path_to_array($project);
		$project_length      = count($project_array);
		$rel_path_temp       = "";
		for($index = 0; $index < $current_path_length && $index < $project_length; $index++){
		    if(($current_path_array[$index] != $project_array[$index]) || ($index+1 == $project_length)){
				$rel_path_temp = str_repeat("../", $current_path_length - $index - 1);
			    break;
			}
		}
		set_rel_path($rel_path_temp);
	}

	function set_rel_path($rel_path){
		global $root, $frame, $form, $pb_style, $project, $pb_site, $pb_image, $current_page, $xml, $pb_script;
        $root         = $_SERVER['DOCUMENT_ROOT']."/".$project;
	    $frame        = $root."view/frame/";
	    $form         = $root."view/form/";
		$pb_style     = $rel_path."view/style/";
		$pb_script    = $rel_path."view/script/";
		$pb_site      = $rel_path."view/site/";
		$pb_image     = $rel_path."view/image/";
		$xml          = $rel_path."view/xml/";
	}

	function path_at_last_slash(){
	    return substr($_SERVER['PHP_SELF'], 1, strrpos($_SERVER['PHP_SELF'],'/'));
	}

	function path_to_array($path){
	    return preg_split('/[\/]+/', $path, NULL, PREG_SPLIT_NO_EMPTY);
	}
	
	function add_styles($extra_styles){
		global $styles;
		array_push($styles, $extra_styles);
	}
	
?>