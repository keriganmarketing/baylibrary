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
                            <?php the_content(); ?>
                            <?php include(locate_template('template-parts/forms/donate.php')); ?>
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
