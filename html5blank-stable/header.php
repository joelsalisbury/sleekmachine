<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.7/css/swiper.min.css" rel="stylesheet">

	</head>
	<body <?php body_class(); ?>>

	<header id="header-main">
		<nav id="nav_sm" class="navbar navbar-default">
		  <div class="container nav-wrap">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		           <a class="navbar-brand" href="<?php echo site_url(); ?>">
			          <img class="oneliner hidden-xs" src="<?php echo get_template_directory_uri(); ?>/assets/wm1-01.svg">
			          <img class="mob-logo visible-xs" src="<?php echo get_template_directory_uri(); ?>/assets/sm-only.png">
		      	   </a>
		    </div>
		    <div id="navbar" class="navbar-collapse collapse">
		       <ul class="nav navbar-nav navbar-right">


		       <?php
					$menu = wp_get_nav_menu_object ('main');
				 
				    $menu_items = wp_get_nav_menu_items($menu->term_id);
				    
				    foreach ($menu_items as $menu_item) {
				        $title = $menu_item->title;
	    				$url = $menu_item->url;
				        echo '<li><a href="'.$url.'">'.$title.'</a></li>';
				    }

				?>
		      </ul>
		    </div><!--/.navbar-collapse -->
		  </div>
		</nav>
	</header>