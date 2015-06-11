<?php
/*
 *  Template Name: FAQ
*/
    get_header();
    the_post();
?>
        <div class="content-container">
            <div class="posts-container">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('repeater') ) {
                        // loop through the rows of data
                        while (have_rows('repeater')) {
                            the_row();
                ?>
                            <section class="post">
                                <article>
                                    <header class="post-header-container faq-header">
                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                    </header>
                                    <div class="post-content-container faq">
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