<?php

use Includes\Modules\Social\SocialSettingsPage;

?>
    <div class="sticky-footer">
        <div class="section pad search-bar">
            <?php include(locate_template('template-parts/partials/search-bar.php')); ?>
        </div>
        <div id="bot">
            <div class="container">
                <div class="columns is-aligned">
                    <div class="column is-10">
                        <?php wp_nav_menu([
                            'theme_location' => 'footer-menu',
                            'container'      => false,
                            'menu_class'     => 'footer-navigation-menu',
                            'fallback_cb'    => '',
                            'menu_id'        => '',
                            'link_before'    => '',
                            'link_after'     => '',
                            'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>'
                        ]); ?>
                    </div>
                    <div class="column is-2">
                        <h4>Contact</h4>
                        <p><a href="tel:#">XXX-XXX-XXXX</a></p>
                        <div class="social has-text-left">
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
    </div><!-- .site-wrapper -->
    </div><!-- .app -->
<?php wp_footer(); ?>