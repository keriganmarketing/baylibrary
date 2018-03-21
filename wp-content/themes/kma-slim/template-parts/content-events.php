<?php

use Includes\Modules\Layouts\Layouts;
use Includes\Modules\Events\Events;

/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */
$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead  = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');

$layouts     = new Layouts();
$events      = new Events();
$eventsArray = $events->getUpcomingEvents();

include(locate_template('template-parts/sections/top.php'));
?>
<div id="mid">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
        <section id="content" class="section support">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12 is-9-desktop">
                        <div class="entry-content content has-sidebar">
                            <?php
                            if(is_array($eventsArray) && count($eventsArray)>0) {
                                foreach ($eventsArray as $event) { ?>
                                    <?php $trimmed = wp_trim_words($event["content"], $num_words = 15,
                                        $more = '... <a href="' . $event['link'] . '">read more.</a>'); ?>
                                    <div class="columns">
                                        <?php if ($event['photo'] != '') { ?>
                                            <div class="column">
                                                <a href="<?= $event['link']; ?>">
                                                    <img src="<?= $event["photo"]; ?>">
                                                </a>
                                            </div>
                                        <?php } ?>
                                        <div class="column">
                                            <h2 class="title is-tertiary is-bold"><a
                                                        href="<?= $event['link']; ?>"><?= $event["name"]; ?></a></h2>
                                            <p><?= $trimmed; ?></p>
                                            <table>
                                                <tr>
                                                    <td class="label">When:</td>
                                                    <td><?= $event['recurr_readable']; ?> at <?= $event['time']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="label">Where:</td>
                                                    <td><?= nl2br($event['location']); ?></td>
                                                </tr>
                                            </table>
                                            <div class="columns is-mobile is-justify-start is-1">
                                                <?php if ($event['facebook_link']) { ?>
                                                    <div class="column is-narrow">
                                                        <a href="<?= $event['facebook_link']; ?>" target="_blank"
                                                           class="facebook">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 34.02 34.02" style="height: 2.3rem;">
                                                                <path fill="#43609C"
                                                                      d="M17,34A17,17,0,1,0,0,17,17,17,0,0,0,17,34"
                                                                      class="container"></path>
                                                                <path fill="#FFF"
                                                                      d="M12.9,14.13h1.76V12.42a4.57,4.57,0,0,1,.57-2.64A3.13,3.13,0,0,1,18,8.5a11.05,11.05,0,0,1,3.15.32l-.44,2.6a5.94,5.94,0,0,0-1.42-.21c-.68,0-1.3.25-1.3.93v2h2.8l-.2,2.54H18v8.84h-3.3V16.67H12.9Z"
                                                                      class="icon"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($event['tickets_link']) { ?>
                                                    <div class="column is-narrow">
                                                        <a class="button is-rounded is-primary"
                                                           href="<?= $event['tickets_link']; ?>">Purchase Tickets</a>
                                                    </div>
                                                <?php } ?>
                                                <?php if ($event['has_rsvp']) { ?>
                                                    <div class="column is-narrow">
                                                        <a class="button is-rounded is-primary"
                                                           href="<?= $event['link']; ?>#rsvp">RSVP</a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="is-primary">
                                    <?php
                                }
                            }else{
                                echo '<p>We do not have any upcoming events at this time.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="column is-12 is-3-desktop">
                        <?php include(locate_template('template-parts/sections/sidebar.php')); ?>
                    </div>
                </div>
        </section>
    </article>
</div>
<?php include(locate_template('template-parts/sections/bot.php')); ?>
?>
