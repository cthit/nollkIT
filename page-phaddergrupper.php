<?php
	get_header();
?>
	<div class="content-container">
		<div class="posts-container">

            <?php
                $amountOfGroups=8;
                for($i = 1;$i<=$amountOfGroups;++$i){
            ?>
                    <section class="post ">
                        <article>
                            <header class="post-header-container">
                                <h2><?php the_field('phaddergruppstitel_' . $i); ?></h2>
                            </header>
                            <div class="post-content-container">
                                <p><?php the_field('phaddergruppsmedlemmar_' . $i); ?></p>
                            </div>
                        </article>
                    </section>
            <?php
                }
            ?>

		</div>
	</div>
<?php
	get_footer();
?>