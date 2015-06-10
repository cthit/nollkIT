<?php
/*
  * Template Name: Declaration
*/

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
        </div>
        <div class="declaration-container">
            <iframe src="https://docs.google.com/forms/d/1aNh7Wr43RbTM86ff2C89ogNBuB3M5RUHUO9-JWU1Sqc/viewform?embedded=true"
                    width="100%" height="1450" frameborder="0" marginheight="0" marginwidth="0">Loading...
            </iframe>
        </div>
    </div>


<?php

    get_footer();

?>