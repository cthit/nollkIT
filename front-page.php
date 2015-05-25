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
<div class="content-container">

    <div id="group-points">
        <ul class="list">
            <li>Lag 1: 50</li>
            <li>Lag 2: 50</li>
            <li>Lag 3: 50</li>
            <li>Lag 4: 50</li>
            <li>Lag 5: 50</li>
            <li>Lag 6: 50</li>
        </ul>
    </div>

    <div class="scheme-daily">
        <div id="calendar">

        </div>
    </div>

    <div class="posts-container">
        <?php
        query_posts('category_name=startsida&showposts=5');
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <section class="post">
                    <article>
                        <header class="post-header-container">
                            <p><?php the_title(); ?></p>
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