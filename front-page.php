<!--

  __  __           _        _              ____
 |  \/  |         | |      | |            / __ \
 | \  / | __ _  __| | ___  | |__  _   _  | |  | |___  ___ _ __ ___   __ _  __ _  ___
 | |\/| |/ _` |/ _` |/ _ \ | '_ \| | | | | |  | / __|/ __| '_ ` _ \ / _` |/ _` |/ _ \
 | |  | | (_| | (_| |  __/ | |_) | |_| | | |__| \__ \ (__| | | | | | (_| | (_| |  __/
 |_|  |_|\__,_|\__,_|\___| |_.__/ \__, |  \____/|___/\___|_| |_| |_|\__,_|\__, |\___|
                                   __/ |                                   __/ |
                                  |___/                                   |___/
 -->

<?php
get_header();
the_post();
?>

<div class="calendar-modal-panel modal-panel">
    <button id="calendar-close-modal-panel" class="close-modal-panel"><i class="fa fa-times"></i></button>
    <h1 id="calendar-modal-panel-title">Title</h1>
    <div id="calendar-modal-panel-content-container">
        <ul class="list" id="where-when-how-list">
            <li id="where">Var? Hubben 2.1</li>
            <li id="when">När? xxx</li>
            <li id="what">Vad? xxx</li>
            <li ><a id="event-url" target="_blank" >Öppna detta event i google calendar <i class="fa fa-calendar"></i></a></li>
        </ul>
    </div>
</div>

<div class="content-container">

    <div id="group-points">
        <h3>Nuvarande ställning</h3>
        <ul class="list">
            <?php
                // check if the repeater field has rows of data
                if( have_rows('repeater') ) {
                    // loop through the rows of data
                    while (have_rows('repeater')) {
                        the_row();
            ?>
                        <li><?php echo get_sub_field('group'); ?></li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>

    <div class="scheme-daily">
        <div id="calendar">

        </div>
    </div>

    <div class="posts-container first-page">
        <?php
        if ( get_query_var('paged') ) {
            $paged = get_query_var('paged');
        } elseif ( get_query_var('page') ) {
            $paged = get_query_var('page');
        } else {
            $paged = 1;
        }
        $args = array(
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
            'posts_per_page' => '3'
        );
        query_posts($args);
        if (have_posts()){
            while(have_posts()){
                the_post();

            ?>
                <section class="post">
                    <article>
                        <header class="post-header-container">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <?php
                                $tags = get_the_tags();
                                if($tags){

                            ?>
                            <h5>Taggar:
                                <?php
                                    foreach($tags as $tag){
                                        echo '#' . $tag->name . ' ';
                                    }
                                ?>
                            </h5>
                            <?php
                                }
                            ?>
                            <h5><?php echo get_the_date(); ?>, <?php echo get_the_time(); ?> av: <?php echo get_the_author(); ?>  </h5>
                        </header>
                        <div class="post-content-container">
                            <?php the_content(); ?>
                        </div>
                        <footer class="post-footer-container">
                            <a href="<?php the_permalink(); ?>"><p>Läs mer</p></a>
                        </footer>
                    </article>
                </section>
        <?php
            }

        } else{
            echo '<p> No content found </p>' ;
        }

        ?>
        <footer class="pagination">
            <div class="older-post-link-container">
            <?php
                if(get_previous_posts_link() !== null){
                    echo get_previous_posts_link('<i class="fa fa-chevron-left"></i>' . ' ' . '<p>Nyare inlägg </p>' );
                }
            ?>
            </div>
            <div class="newer-post-link-container">
            <?php
                if(get_next_posts_link() !== null){
                    echo get_next_posts_link( '<p>Äldre inlägg</p>' . ' ' . '<i class="fa fa-chevron-right"></i>');
                }

            ?>
            </div>
            <div class="page-number-container">
                <?php
                echo paginate_links();
                ?>
            </div>
        </footer>

    </div>

</div>

<?php
get_footer();
?>