<?php

use Includes\Modules\Social\SocialSettingsPage;
use Includes\Modules\Events\Events;

$events      = new Events();
$eventsArray = $events->getUpcomingEvents();

?>
    <div class="sticky-footer">
        <div class="section pad search-bar">
            <?php include(locate_template('template-parts/partials/search-bar.php')); ?>
        </div>
        <div id="bot">
            <div class="container">
                <div class="columns is-multiline">
                    <div class="column is-one-fifth footer-nav-menu">
                        <h4 class="title"><a href="/about-us/">About Us</a></h4>
                        <ul>
                            <?php foreach (getPageChildren('About Us') as $child) { ?>
                                <li><a href="<?= get_permalink($child->ID); ?>"
                                       class="footer-submenu-item"><?= $child->post_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="column is-narrow footer-nav-menu">
                        <h4 class="title"><a href="/what-we-do/">What We Do</a></h4>
                        <ul>
                            <?php foreach (getPageChildren('What We Do') as $child) { ?>
                                <li><a href="<?= get_permalink($child->ID); ?>"
                                       class="footer-submenu-item"><?= $child->post_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="column is-one-fifth footer-nav-menu">
                        <h4 class="title"><a href="/events/">Events</a></h4>
                        <ul>
                            <li><a href="/events/"
                                       class="footer-submenu-item">Upcoming Events</a></li>
                            <li><a href="/past-events/"
                                   class="footer-submenu-item">Past Events</a></li>
                        </ul>
                    </div>
                    <div class="column is-narrow footer-nav-menu">
                        <h4 class="title"><a href="/donate-support/">Donate & Support</a></h4>
                        <ul>
                            <?php foreach (getPageChildren('Donate & Support') as $child) { ?>
                                <li><a href="<?= get_permalink($child->ID); ?>"
                                       class="footer-submenu-item"><?= $child->post_title; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="column is-narrow footer-nav-menu">
                        <h4 class="title"><a href="/contact/">Contact</a></h4>
                        <p><a href="mailto:info@bcplfoundation.org" class="footer-submenu-item phone">info@bcplfoundation.org</a></p>
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
            </div>
        </div>
        <div id="bot-bot">
            <?php include(locate_template('template-parts/partials/copyright.php')); ?>
        </div>
    </div><!-- .sticky-footer -->
    <modal><?= (isset($modalContent) && $modalContent != '' ? $modalContent : ''); ?></modal>
    </div><!-- .site-wrapper -->
</div><!-- .app -->
<?php wp_footer(); ?>