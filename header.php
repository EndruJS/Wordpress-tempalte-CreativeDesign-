<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?> </title>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/less.min.js" type="text/javascript"></script>
	<link rel="stylesheet/less" type="text/css" href="<?php echo get_template_directory_uri(); ?>/src/style.less">
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	