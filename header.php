<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="Meta description" />
	<title>DRW</title>
	<?php wp_head(); ?>
</head>
<body>

	<header id="masthead" class="site-header">
	<?php if (is_front_page() || is_404() ): ?>
		<div class="container">
			<div class="row">
			<div class="menu-here frontpage-header"> 
				<nav class="navbar navbar-expand-lg navbar-light navbar-center">
					<a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
						<?php dynamic_sidebar('logo');?>
					</a> 
					<?php wp_nav_menu(
						array(
						'theme_location'    => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'navbar-nav',
						'container_class'  => 'collapse navbar-collapse main-nav-toggle',
						'container_id'    => 'navbarNav',
						)
						); 
					?>
					<div class="rightside_head green-btn">
						<?php dynamic_sidebar('getintouch');?>
					</div>
								
				</nav>
				</div>
			</div>
		</div>
		<?php else: ?>
			<div class="container">
			<div class="row">
			<div class="menu-here impressum-header"> 
				<nav class="navbar navbar-expand-lg navbar-light navbar-center">
					<a class="logo_header" style="list-style: none;" href="<?php echo esc_url(home_url('/')); ?>">
						<?php dynamic_sidebar('logo');?>
					</a> 
					<a href="/home" class="impressum-back">Home</a>
					<div class="rightside_head green-btn">
						<?php dynamic_sidebar('getintouch');?>
					</div>
								
				</nav>
				</div>
			</div>
		</div>
		<?php endif;?>
	</header>