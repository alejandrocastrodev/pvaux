<?php
$project = "pvaux/";
$current_page = "Home";
include $_SERVER['DOCUMENT_ROOT']."/".$project."context.php"; //init context


include $frame."layer-start-header.php";
//insert header content ?><?php
include $frame."layer-header-content.php";
//insert content
?>

	<p>Inicio del texto</p>
	<p>Segunda linea</p>

<?php
include $frame."layer-content-script.php";
//insert script references ?><?php
include $frame."layer-script-end.php";
?>