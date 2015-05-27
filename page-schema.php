<?php 
	get_header();
?>	
	<div class="content-container">
		<div class="posts-container">
                <section class="post">
                    <article>
                        <header class="post-header-container">
                            <p><?php the_field('titel_info_text_schema'); ?></p>
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
                            <?php the_field('info_text_schema'); ?>
                        </div>
                    </article>
                </section>
		</div>
		<div class="scheme-daily" id="scheme-page-container">
			<div id="calendar">

            </div>
		</div>
	</div>
<?php
	get_footer();
?>