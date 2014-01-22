
    <!-[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]->

    <? /*  favicon    */ ?>
    <meta property="og:image" content="<?=$pb_image;?>favicon.png" />
	<link rel="shortcut icon" href="<?=$pb_image;?>favicon.ico" />

    <? /*  styles    */ ?>
    <link href="<?=$pb_style;?>perfect-scrollbar.css"       rel="stylesheet">
    <link href="<?=$pb_style;?>bootstrap.min.css"            rel="stylesheet">
    <link href="<?=$pb_style;?>bootstrap-responsive.min.css" rel="stylesheet">

    <? /*  all IE    */ ?>
    <!--[if IE]>
    <?foreach ($styles as $style) {
       ?><link href="<?=$pb_style.$style;?>.css" rel="stylesheet"><?
    }?>
    <![endif]-->

    <? /*  everything EXCEPT IE    */ ?>
    <!--[if !IE]><!-->
    <?foreach ($styles as $style) {
       ?><link href="<?=$pb_style.$style;?>.less" rel="stylesheet/less" type="text/css" /><? 
    }?>
    <!--<![endif]-->

</head>

  <body>
	<?php include $frame."top-menu.php";?>
	<?php include $frame."header.php";?>
	<div class="container-fluid">
	    <div id="main" class="row-fluid main">
	      <div class="span2">
		<?php include $frame."actions.php";?>
	    <?php include $frame."feedback.php";?>
	      </div> <!— /left-menu —>	
	      <div id="content" class="span10 content pull-right">
	      	