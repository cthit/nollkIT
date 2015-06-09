<?php
/*
* Template Name: Calendar
*/
get_header();
the_post();
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
        <div class="posts-container">
            <section class="post">
                <article>
                    <header class="post-header-container">
                        <h2><?php the_field('titel_info_text_schema'); ?></h2>
                    </header>
                    <div class="post-content-container">
                        <table id="scheme">
                            <tr>
                                <td></td>
                                <td>Obligatoriskt</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Föreläsningar/lektioner</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Mottagningsverksamhet</td>
                            </tr>
                        </table>
                        <?php the_content(); ?>
                    </div>
                </article>
            </section>
        </div>
        <div class="scheme-daily" id="scheme-page-container">
            <div id="calendar">

            </div>
        </div>
    </div>
<?php
get_footer();
?>