<?php
/*
  *  Template Name: Contact
  * */
    get_header();
    the_post();
?>
    <div class="content-container">
        <div class="posts-container">
            <section class="post">
                <article>
                    <header class="post-header-container">
                        <h2><?php the_title(); ?></h2>
                    </header>
                    <div class="post-content-container">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    $location = get_field('google-map');
                    ?>
                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                    </div>
                </article>
            </section>
        </div>
    </div>


<?php

    get_footer();
?>