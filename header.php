<!DOCTYPE html>
<html>

	<head>
		<meta charset="<?php bloginfo('charset'); ?>"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fullcalendar/fullcalendar.css' />
        <link media="print" rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/fullcalendar/fullcalendar.print.css' />
        <script src='<?php echo get_template_directory_uri(); ?>/fullcalendar/lib/moment.min.js'></script>
        <script src='<?php echo get_template_directory_uri(); ?>/fullcalendar/fullcalendar.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/fullcalendar/gcal.js'></script>

		<!--Här under läggs den heliga nollbrickan till bara så du vet -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/nollbricka.png" />

		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

    <body class="body">

    <div id="cover-screen-container"></div>

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




        <header class="site-header" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/nollkit15_cropped.jpg);">
            <div class="top-bar">

                <?php
                    $args = array(
                        'theme_location' => 'header',
                        'menu_class' => 'list',
                        'container_id' => 'mobile-menu-container'
                        );
                    wp_nav_menu( $args );
                ?>

                <div id="logo-and-mobile-wrapper">
                    <div id="logo-container">
                        <a href="/"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/top_logo.png"></a>
                    </div>
                    <div id="mobile-hamburger-container">
                        <button style="button" id="hamburger"><i class="fa fa-bars"></i></button>
                        <button style="button" id="cross"><i class="fa fa-times"></i></button>
                    </div>
                </div>

                <?php
                $args = array(
                    'theme_location' => 'header',
                    'menu_class' => 'list',
                    'container_id' => 'desktop-menu-container'
                );
                wp_nav_menu( $args );
                ?>

            </div>

            <div id="contact-container">

                <div id="number-container">
                    <ul class="list">
                        <li><a href="tel:+46703121337">NollKIT journummer: <i class="fa fa-phone-square"></i><span> 0703 12 1337</span></a></li>
                        <li><a href="tel:+46317723927">Kårens journummer: <i class="fa fa-phone-square"></i><span> 031-772 3927</span></a></li>
                    </ul>
                </div>

                <div id="social-media-container">
                    <div class="fb-like" data-href="https://www.facebook.com/NollKIT?fref=ts"
                        data-layout="button_count" data-action="like" data-show-faces="false" data-share="false" >
                    </div>
                    <a href="https://twitter.com/NollKIT" class="twitter-follow-button" data-show-count="false">Follow @NollKIT</a>
                </div>
            </div>

        </header>