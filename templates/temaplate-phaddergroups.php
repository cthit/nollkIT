
<?php
/*
    Template Name: Phaddergroups
*/
    get_header();
    the_post();
?>
<script src="<?php echo get_template_directory_uri() ?>/js/phaddergroups.js"></script>
<div class="content-container">
    <div class="posts-container">
        <?php
        // check if the repeater field has rows of data
            if( have_rows('repeater') ) {
                $i = 0;
                // loop through the rows of data
                while (have_rows('repeater')){
                    ++$i;
                    the_row();
        ?>
                        <section class="post">
                            <article>
                                <header class="post-header-container clickable id-<?php echo $i ?>">
                                    <h2><?php the_sub_field('titel'); ?></h2>
                                </header>
                                <div class="post-content-container">
                                    <?php the_sub_field('members'); ?>
                                </div>
                                <div id="modal-panel-id-<?php echo $i ?>" class="modal-panel">
                                    <
                                    <?php the_sub_field('modal_panel_popup'); ?>
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