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

    <div id="scheme-daily">

        <iframe src="https://www.google.com/calendar/embed?showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=vsslnmoph2ae1se32drhd92psc%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=Europe%2FStockholm"
                style=" border-width:0 " width="100%" height="400" frameborder="0" scrolling="no"></iframe>
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