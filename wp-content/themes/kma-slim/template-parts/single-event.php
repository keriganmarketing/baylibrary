<?php
use Includes\Modules\Layouts\Layouts;
use Includes\Modules\Events\Events;

/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */

get_header();
//while (have_posts()) : the_post();

    $headline = $post->post_title;
    $subhead  = '';

    $events      = new Events();
    $event = $events->getSingleEvent($post->ID);

    include(locate_template('template-parts/sections/top.php'));
    ?>
    <div id="mid">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
            <?php //include(locate_template('template-parts/partials/breadcrumbs.php')); ?>
            <section id="content" class="section support">
                <div class="container">
                    <div class="columns is-multiline">
                        <div class="column is-12 is-4-desktop">
                            event image
                        </div>
                        <div class="column is-12 is-8-desktop">
                            <div class="entry-content content has-sidebar">
                                <?php
                                the_content();
                                ?>
                            </div>
                        </div>

                    </div>
                    <div id="rsvp">RSVP</div>
                    <?php
                    echo '<pre>', print_r($event), '</pre>';
                    ?>
                </div>
            </section>
        </article>
    </div>
    <?php include(locate_template('template-parts/sections/bot.php'));
//endwhile;
get_footer();
?>