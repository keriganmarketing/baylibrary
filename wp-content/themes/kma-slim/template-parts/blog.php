<?php
/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */
$headline = ($post->page_information_headline != '' ? $post->page_information_headline : get_the_archive_title());
$subhead = ($post->page_information_subhead != '' ? $post->page_information_subhead : get_the_archive_description());

if(is_search()){
    $headline = 'Search Results';
    if ( have_posts() ) : the_post();
        $hasResults = true;
        $subhead = (isset($_GET['s']) ? 'Showing entries matching <em>' . $_GET['s'] . '</em>' : '');
    else:
        $hasResults = false;
        $subhead = (isset($_GET['s']) ? 'Nothing was found matching <em>' . $_GET['s'] . '</em>' : '');
    endif;
}

include(locate_template('template-parts/sections/top.php'));
?>
<div id="mid" >
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php include(locate_template('template-parts/sections/support-heading.php')); ?>
        <section id="content" class="content section">
            <div class="container">
                <div class="entry-content content">
                <div class="columns is-multiline">
                <?php
                    if(is_search()){
                        if ( $hasResults ) :
                            get_template_part('template-parts/partials/search-result', get_post_format());
                        else:
                            echo '<div class="column is-12"><p>Try another search?</p></div>';
                        endif;
                    }
                    if(is_home()){
                        while ( have_posts() ) : the_post();
                            get_template_part('template-parts/partials/mini-article', get_post_format());
                        endwhile;
                    }
                ?>
                </div>
                </div>
            </div>
        </section>
    </article><!-- #post-## -->
</div>
<?php include(locate_template('template-parts/sections/bot.php')); ?>