<?php

use Includes\Modules\Social\SocialSettingsPage;
use Includes\Modules\Layouts\Layouts;

/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */
$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');

include(locate_template('template-parts/sections/top.php'));
?>
<div id="mid" >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
        <section id="content" class="section support">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-12 is-4-desktop">
                        <div class="entry-content content">
                            <?php the_content(); ?>
                            <div class="social">
                                <?php
                                $socialLinks = new SocialSettingsPage();
                                $socialIcons = $socialLinks->getSocialLinks('svg', 'circle');
                                if (is_array($socialIcons)) {
                                    foreach ($socialIcons as $socialId => $socialLink) {
                                        echo '<a class="' . $socialId . '" href="' . $socialLink[0] . '" target="_blank" >' . $socialLink[1] . '</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="column is-12 is-8-desktop">
                        <div class="entry-content content has-sidebar">
                            <?php echo do_shortcode('[contact_form]'); ?>
                        </div>
                    </div>
                </div>
        </section>
    </article>
</div>
<?php include(locate_template('template-parts/sections/bot.php')); ?>