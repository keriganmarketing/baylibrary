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
$subhead = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');

$events = new Events();

include(locate_template('template-parts/sections/top.php'));
?>
<div id="mid" >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
        <section id="content" class="section support">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12 is-8-desktop">
                        <div class="entry-content content">
                            <div class="columns">
                                <div class="column">
                                    <p>photo</p>    
                                </div>
                                <div class="column columns is-multiline">
                                    <div class="column">
                                        <p>title</p>
                                    </div>    
                                    <div class="column">
                                        <p>copy</p>
                                    </div>
                                    <div class="column">
                                        <p>buttons</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $eventsArray = $events->getUpcomingEvents();
                                var_dump($eventsArray);
                            ?>
                            <p>Events here</p>

                        </div>
                    </div>
                    <div class="column is-12 is-4-desktop">
                        <div class="entry-content content has-sidebar">
                        </div>
                            <p>Sidebar here</p>
                    </div>
                </div>
        </section>
    </article>
</div>
<?php include(locate_template('template-parts/sections/bot.php')); ?>
?>
