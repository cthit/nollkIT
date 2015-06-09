<?php
    /*
     * Template Name: Standard Page
    */
    get_header();
    the_post();
?>
    <div class="content-container">
        <div class="posts-container">
            <section class="post">
                <article>
                    <header class="post-header-container">
                        <h1><?php the_title(); ?></h1>
                    </header>
                    <div class="post-content-container">
                        <?php the_content(); ?>
                    </div>
                </article>
            </section>
        </div>
    </div>
<?php
    get_footer();
?>