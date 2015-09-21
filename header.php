<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>

	<!-- Meta -->
	<meta charset="<?php bloginfo('charset'); ?>"
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<!-- Title -->
	<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

	<!-- Link -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway'>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		<?php wp_nav_menu(array(
				'theme_location' => 'primary'
		)); ?>
	</header>
	
	<!-- Begin container -->
	<div class="container-page">	
		<div class="page-header" id="home">
			<img src="<?php echo get_template_directory_uri(); ?>/images/background/large.jpg" alt="" class="scaleImage">		
			<div class="title">
				<h1><?php
				if (is_front_page()) {
					bloginfo('name');
				} else {
					global $category;
					if (isset($category)) {
						echo $category;			
					} else {
						bloginfo('name');
					}
				} ?></h1>
			</div>
		</div><!-- .page-header -->