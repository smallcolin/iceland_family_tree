<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>
		<?php wp_title(); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-8 col-sm-4">
					<a href="<?php bloginfo("url"); ?>">
						<h2><?php bloginfo('site_name'); ?></h2>
					</a>
				</div>
				<div class="hidden-xs hidden-sm col-md-8 fullmenu">
					<?php wp_nav_menu(); ?>
				</div>
				<nav>
					<div class="col-xs-3 col-sm-8 hidden-md hidden-lg menu-icon">
						<i class="fa fa-bars fa-2x"></i>
					</div>
					<div class="responsive-menu">
						<?php wp_nav_menu(); ?>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<main id="main">
