<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PinBoxShop.com <?php wp_title(''); ?></title>
	<link rel="shortcut icon" type="image/ico" href="http://orpazdefense.com/site/wp-content/themes/mytheme/img/icon-code.ico"/>
	<?php wp_head(); ?>
</head>
<body>
	<div class="contact-masthead navbar-fixed-top">
		<div class="info">
			<ul>
				<li>1-800-xxx-xxxx</li>
				<li>info@pinboxshop.com</li>
			</ul>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-top od-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#od-collapse-main-menu" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url(); ?>">  <img src="http://orpazdefense.com/site/wp-content/uploads/2017/01/^8A4413E0AA8E0DC4B28C426F2A34E5C743CAE866F188E99595^pimgpsh_fullsize_distr.png"><?php //echo get_bloginfo('name'); ?></a>
			</div>
			<div class="collapse navbar-collapse" id="od-collapse-main-menu">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'menu_id' => 'od-header-menu',
						'menu_class' => 'nav navbar-nav navbar-right'
					)); ?>
			</div>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top:80px;">
