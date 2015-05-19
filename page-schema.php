<?php 
	get_header();
?>	
	<div class="content-container">
		<div class="posts-container">
			<?php
					query_posts('category_name=Schema&showposts=5');
					while (have_posts()) : the_post();
			?>

						<section class="post">
							<article>
								<header class="post-header-container">
									<p><?php the_title(); ?></p>
								</header>
								<div class="post-content-container">
									<table id="scheme">
										<tr>
											<td></td>
											<td>Obligatoriskt</td>
										</tr>
										<tr>		
											<td></td>
											<td>Föreläsningar/lektioner</td>
										</tr>
										<tr>	
											<td></td>
											<td>Sova sova sova!</td>
										</tr>
										<tr>
											<td></td>
											<td>Mottagningsverksamhet</td>
										</tr>
									</table>
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
			?>
		</div>
		<div class="scheme-page-container">
			<iframe src="https://www.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=vsslnmoph2ae1se32drhd92psc%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=Europe%2FStockholm"
			 style=" border-width:0 " width="100%" height="1150" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
<?php
	get_footer();
?>