<?php
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
                    <footer class="post-footer-container">
                        <?php
                            $prev_post = get_previous_post();
                            if($prev_post){
                        ?>
                            <a class="previous-post" href="<?php echo get_permalink($prev_post->ID); ?>">
                                    <i class="fa fa-chevron-left"></i><p>Föregående inlägg</p></a>
                        <?php
                            }
                        ?>
                        <?php
                            $next_post = get_next_post();
                            if($next_post){
                        ?>
                        <a class="next-post" href="<?php echo get_permalink($next_post->ID); ?>">
                            <p>Nästa inlägg</p><i class="fa fa-chevron-right"></i></a>
                        <?php
                            }
                        ?>
                    </footer>
                </article>
            </section>
        </div>
    </div>
<?php
    get_footer();
?>