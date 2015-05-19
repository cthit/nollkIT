<!DOCTYPE html>
<html>
	<head>
		<meta charset="<php? bloginfo('charset'); ?>"> 
		<meta name="viewport" conent="width=device-width">
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<!--Här under läggs den heliga nollbrickan till bara så du vet -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/nollbricka.png" /> 
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

	<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.3";
		  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],
		p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id))
		{js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}
		}(document, 'script', 'twitter-wjs');
	</script>
	
	
	<header class="site-header">
		<div class="header-wrapper">
			<nav class="site-nav">
				<div id="logo-button-wrapper">
					<div id="logo-container">
						<a href="http://localhost/wordpress"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/top_logo.png"></a>
					</div>
					<div id="mobile-hamburger-container">
						<button style="button" id="hamburger">&#9776;</button>
						<button style="button" id="cross">&#9747;</button>
					</div>
				</div>
				<?php 
					$args = array('theme_location' => 'header');
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
		</div>
		<div id="contact-container">
			<div id="number-container">
				<ul class="list">
					<li><a href="tel:+46703121337">NollKIT journummer: 0703-12 1337<a></li>
					<li><a href="tel:+46317723927">Kårens trygghetsjour: 031-772 39 27<a></li>
				</ul>
			</div>
			<div class="fb-like" data-href="https://www.facebook.com/NollKIT?fref=ts"
			 	data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" >
			</div>
				 	<a href="https://twitter.com/NollKIT" class="twitter-follow-button" data-show-count="false">Follow @NollKIT</a>
			<!--
			<div id="youtube">
				<script src="https://apis.google.com/js/platform.js"></script>
				<div class="g-ytsubscribe" data-channel="GoogleDevelopers"></div>
			</div>
			-->
		</div>	
				
	</header>