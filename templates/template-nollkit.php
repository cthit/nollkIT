<?php
    /* Template Name: NollKIT */
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
                </article>
            </section>

            <?php
                if(have_rows('repeater')){
                    while(have_rows('repeater')){
                        the_row();
            ?>
            <section class="post">
                <article>
                    <header class="post-header-container">
                        <h2><?php echo get_sub_field('title'); ?></h2>
                    </header>
                    <div class="post-content-container">
                        <?php echo get_sub_field('content'); ?>
                    </div>
                </article>
            </section>

            <?php
                    }
                }
            ?>

        </div>
    </div>
<?php
    get_footer();
?>