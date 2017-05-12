<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PinBoxShop.com <?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/ico" href="<?php echo home_url(); ?>/wp-content/themes/mytheme/img/icon-code.ico"/>
	<?php wp_head(); ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top od-navbar pbox-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#od-collapse-main-menu" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand pbox-navbar__brand" href="<?php echo home_url(); ?>">
					<img src="<?php echo home_url(); ?>/wp-content/uploads/2017/03/Logo.png"><?php //echo get_bloginfo('name'); ?>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="od-collapse-main-menu">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						// 'menu_id' => 'od-header-menu',
						'menu_id' => 'pbox-header-menu',
						'container' => false,
						'menu_class' => 'nav navbar-nav pbox-navbar__menu'
					)); ?>
				<?php wp_nav_menu(
					array(
						'menu' => 'Social Menu',
						'theme_location' => 'social-menu',
						'menu_id' => 'pbox-social-menu',
						'container' => false,
						'menu_class' => 'pbox-navbar__social-menu'
					)); ?>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
