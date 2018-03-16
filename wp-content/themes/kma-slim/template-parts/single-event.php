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

$events = new Events();
$event  = $events->getSingleEvent($post->ID);

include(locate_template('template-parts/sections/top.php'));
?>
    <div id="mid">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
            <?php //include(locate_template('template-parts/partials/breadcrumbs.php')); ?>
            <section id="content" class="section support">
                <div class="container">
                    <div class="columns is-multiline">

                        <div class="column is-12 is-9-desktop">
                            <div class="entry-content content has-sidebar">
                                <div>
                                <?php if ($event['tickets_link'] != '') { ?>
                                    <a class="button is-rounded is-primary is-outlined" target="_blank"
                                       href="<?= $event['tickets_link']; ?>"
                                    >
                                        Purchase Tickets
                                    </a>
                                <?php } ?>
                                <?php if ($event['has_rsvp'] != '') { ?>
                                    <a class="button is-rounded is-primary is-outlined"
                                       href="#rsvp"
                                    >
                                        RSVP
                                    </a>
                                <?php } ?>
                                <?php if ($event['facebook_link'] != '') { ?>
                                    <a href="<?= $event['facebook_link']; ?>" target="_blank" class="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.02 34.02"
                                             style="height: 2.3rem;">
                                            <path fill="#43609C"
                                                  d="M17,34A17,17,0,1,0,0,17,17,17,0,0,0,17,34"
                                                  class="container"></path>
                                            <path fill="#FFF"
                                                  d="M12.9,14.13h1.76V12.42a4.57,4.57,0,0,1,.57-2.64A3.13,3.13,0,0,1,18,8.5a11.05,11.05,0,0,1,3.15.32l-.44,2.6a5.94,5.94,0,0,0-1.42-.21c-.68,0-1.3.25-1.3.93v2h2.8l-.2,2.54H18v8.84h-3.3V16.67H12.9Z"
                                                  class="icon"></path>
                                        </svg>
                                    </a>
                                <?php } ?>
                                    <hr>
                                </div>

                                <?php echo apply_filters('the_content', $event["content"]); ?>

                                <?php if ($event['has_rsvp'] != '') { ?>
                                    <hr>
                                    <?php echo do_shortcode('[rsvp_form name="'.str_replace('"','', $event['name']).'" ]'); ?>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="column is-12 is-3-desktop">
                            <div class="entry-content content sidebar has-text-centered">
                                <?php if ($event['photo'] != '') { ?>
                                    <img src="<?= $event['photo']; ?>">
                                    <p>&nbsp;</p>
                                <?php } ?>
                                <?php if ($event['facebook_link'] != '') { ?>
                                <div class="has-text-centered">
                                    <a href="<?= $event['facebook_link']; ?>" target="_blank" class="facebook">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34.02 34.02"
                                             style="height: 2.3rem;">
                                            <path fill="#43609C"
                                                  d="M17,34A17,17,0,1,0,0,17,17,17,0,0,0,17,34"
                                                  class="container"></path>
                                            <path fill="#FFF"
                                                  d="M12.9,14.13h1.76V12.42a4.57,4.57,0,0,1,.57-2.64A3.13,3.13,0,0,1,18,8.5a11.05,11.05,0,0,1,3.15.32l-.44,2.6a5.94,5.94,0,0,0-1.42-.21c-.68,0-1.3.25-1.3.93v2h2.8l-.2,2.54H18v8.84h-3.3V16.67H12.9Z"
                                                  class="icon"></path>
                                        </svg>
                                    </a>
                                    <p><a href="<?= $event['facebook_link']; ?>" target="_blank" class="facebook">Follow this event<br>on Facebook</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </article>
    </div>
<?php include(locate_template('template-parts/sections/bot.php'));
//endwhile;
get_footer();
?>