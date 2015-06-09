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
?>

<div class="calendar-modal-panel modal-panel">
    <button id="calendar-close-modal-panel" class="close-modal-panel"><i class="fa fa-times"></i></button>
    <h3 id="calendar-modal-panel-title">Title</h3>
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
            <li><?php the_field('grupp_1') ?></li>
            <li><?php the_field('grupp_2') ?></li>
            <li><?php the_field('grupp_3') ?></li>
            <li><?php the_field('grupp_4') ?></li>
            <li><?php the_field('grupp_5') ?></li>
            <li><?php the_field('grupp_6') ?></li>
            <li><?php the_field('grupp_7') ?></li>
            <li><?php the_field('grupp_8') ?></li>
        </ul>
    </div>

    <div class="scheme-daily">
        <div id="calendar">

        </div>
    </div>

    <div class="posts-container first-page">
        <?php
        query_posts('category_name=startsida&showposts=5');
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <section class="post">
                    <article>
                        <header class="post-header-container">
                            <h2><?php the_title(); ?></2>
                        </header>
                        <div class="post-content-container">
                            <?php the_content(); ?>
                        </div>
                        <footer class="post-footer-container">
                            <ul class="list">
                                <li><?php echo get_the_date(); ?></li>
                                <li><?php echo get_the_time(); ?></li>
                                <li>Created by: <?php echo get_the_author(); ?></li>
                            </ul>
                        </footer>
                    </article>
                </section>
            <?php
            endwhile;
        else :
            echo '<p> No content found </p>' ;
        endif;
        ?>
    </div>

</div>

<?php
get_footer();
?>