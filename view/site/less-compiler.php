<?php
$project = "pvaux/";
$current_page = "Less-compiler";
include $_SERVER['DOCUMENT_ROOT']."/".$project."context.php"; //init context

add_styles('form');

include $frame."layer-start-header.php";
//insert header content ?><?php
include $frame."layer-header-content.php";
//insert content
?>

		<?php
		include $form."multi-check-box.php";
		?>

<?php
include $frame."layer-content-script.php";
//insert script references ?>
<script src="<?=$pb_script;?>form.js"></script>
<script src="<?=$pb_script;?>compile-less.js"></script>
<?php
include $frame."layer-script-end.php";
?>