<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta -->
	<meta charset="<?php bloginfo('charset'); ?>"
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Link -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="site-header" <?php echo (is_home() ? 'id="home"' : ''); ?>>
		<nav>
			<?php wp_nav_menu(array(
				'menu_class' => 'nav-menu',
				'theme_location' => 'primary'
			) ); ?>
		</nav>
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/images/background/large.jpg" alt="" class="blog-image">		
			<div class="site-title-area">
				<span class="site-title"><?php bloginfo('name'); ?></span>
			</div>
		</div>
	</header><!-- .site-header -->

	<main id="content" class="site-content" role="main">