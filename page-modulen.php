<?php
    get_header();
?>
    <div class="content-container">
        <div class="posts-container">
            <section class="post ">
                <article>
                    <header class="post-header-container">
                        <?php the_field('titel'); ?>
                    </header>
                    <div class="image-container">
                        <?php echo wp_get_attachment_image(get_field('img'),'full'); ?>
                    </div>
                    <div class="post-content-container" id="modulen">
                        <?php the_field('om_modulen'); ?>
                    </div>

                </article>
            </section>
        </div>
    </div>
<?php
    get_footer();
?>