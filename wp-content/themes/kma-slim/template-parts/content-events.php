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
$eventsArray = $events->getUpcomingEvents();

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
                            <?php
                                foreach ($eventsArray as $key=>$var) { ?>
                                    <div class="columns">
                                        <div class="column"> 
                                            <img src="<?php echo $eventsArray[$key]["photo"]; ?>">    
                                        </div>
                                        <div class="column">
                                            <h2><?php echo $eventsArray[$key]["name"]; ?></h2>
                                            <?php $trimmed = wp_trim_words( $eventsArray[$key]["content"], $num_words = 25, $more = '...' ); ?>
                                            <p><?php echo $trimmed; ?></p>
                                        </div>
                                    </div>                                    
                                <?php
                                };
                                ?>

                            <?php
                                echo('<pre>');
                                    var_dump($eventsArray);
                                echo('</pre>');
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
