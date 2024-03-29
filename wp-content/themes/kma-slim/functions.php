<?php
/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.3
 */

use Includes\Modules\Events\Events;
use Includes\Modules\Photos\Photos;
use Includes\Modules\Helpers\CleanWP;
use Includes\Modules\Layouts\Layouts;
use Includes\Modules\Leads\SimpleRSVP;
use Includes\Modules\Helpers\PageField;
use Includes\Modules\Leads\SimpleContact;
use Includes\Modules\Social\SocialSettingsPage;

require('vendor/autoload.php');

new CleanWP();

$socialLinks = new SocialSettingsPage();
if (is_admin()) {
    $socialLinks->createPage();
}

$layouts = new Layouts();
$layouts->addPageHeadlines();
$layouts->createSidebarSelector();
$layouts->addSidebar('Featured Image Sidebar');
$layouts->addSidebar('Get Involved Sidebar');

$contact = new SimpleContact();
$contact->setupAdmin();
$contact->setupShortcode();

$photos = new Photos();
$photos->setupAdmin();

$events = new Events();
$events->setupAdmin();

$rsvp = new SimpleRSVP();
$rsvp->setupAdmin();
$rsvp->setupShortcode();

// $pageField = new PageField();
// $pageField->addField(get_option('page_on_front'), 'Get involved', [
//     'Section Title' => 'text',
//     'Section Text'  => 'wysiwyg',
//     'Section Photo' => 'image'
// ]);

add_action('after_setup_theme', function () {

    load_theme_textdomain('kmaslim', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'mobile-menu' => esc_html__('Mobile Menu', 'kmaslim'),
        'footer-menu' => esc_html__('Footer Menu', 'kmaslim'),
        'main-menu'   => esc_html__('Main Navigation', 'kmaslim')
    ]);

    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ]);

    add_action('wp_head', function () {
        ?>
        <style type="text/css">
        <?php echo file_get_contents(get_template_directory() . '/style.css'); ?>
        </style><?php
    });

    add_editor_style();

});

// Load admin stylesheet
function custom_admin_css() {
    wp_enqueue_style('backend-css', get_template_directory_uri() . '/admin.css', [], null);
}
add_action('admin_head', 'custom_admin_css');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('scripts', get_template_directory_uri() . '/app.js', [], '0.0.1', true);
});

function getPageChildren($pageName)
{
    $parent   = get_page_by_title($pageName);
    $children = get_pages([
        'parent'      => $parent->ID,
        'sort_column' => 'menu_order',
        'sort_order'  => 'asc',
        'post_status'    => 'publish'
    ]);

    return $children;
}