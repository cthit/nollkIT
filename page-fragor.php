<?php 
	get_header();
?>
	<div class="content-container">
		<div class="posts-container">
			<?php
				query_posts('category_name=faq');
				if (have_posts()) : 
					while (have_posts()) : the_post(); 
			?>
						<section class="post">
							<article>
								<header class="post-header-container">
									<p><?php the_title(); ?></p>
								</header>
								<div class="post-content-container faq">
									<?php the_content(); ?>
								</div>
								<footer class="post-footer-container">
									<ul>
										<li><?php echo get_the_date(); ?></li>
										<li><?php echo get_the_time(); ?></li>
										<li>Created by: <?php echo get_the_author(); ?></li>
									</ul>	
								</footer>
							</article>	
						</section>
			<?php
					endwhile;
				else : 
					echo '<p> No content found </p>' ;
				endif;
			?>
		</div>
	</div>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/faq.js"></script>
<?php
	get_footer();
?>