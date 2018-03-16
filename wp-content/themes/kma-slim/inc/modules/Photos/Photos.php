<?php

namespace Includes\Modules\Photos;

use KeriganSolutions\CPT\CustomPostType;

// Exit if accessed directly.
if ( ! defined('ABSPATH')) {
    exit;
}

class Photos
{

    /**
     * Events constructor.
     */
    function __construct()
    {

    }

    function setupAdmin()
    {
        $this->createPostType();
        $this->createAdminColumns();
        $this->setupShortcode();
    }

    /**
     * @return null
     */
    public function createPostType()
    {
        $photos = new CustomPostType('Photo', [
            'supports'           => ['title', 'revisions'],
            'menu_icon'          => 'dashicons-format-image',
            'rewrite'            => ['with_front' => true],
            'has_archive'        => true,
            'menu_position'      => null,
            'public'             => true,
            'publicly_queryable' => true,
        ]);

        $photos->addTaxonomy('Gallery');

        $photos->addMetaBox('Photo Details', [
            'Photo File' => 'image',
        ]);

        $photos->addMetaBox(
            'Photo Description',
            [
                'HTML' => 'wysiwyg',
            ]
        );

    }

    /**
     * @return null
     */
    public function createAdminColumns()
    {

        add_filter('manage_photo_posts_columns',
            function ($defaults) {
                $defaults = [
                    'cb'    => '<input type="checkbox" />',
                    'title' => 'Title',
                    'photo' => 'Photo'
                ];

                return $defaults;
            }, 0);

        add_action('manage_photo_posts_custom_column', function ($column_name, $post_ID) {
            switch ($column_name) {
                case 'photo':
                    $photo = get_post_meta($post_ID, 'photo_details_photo_file', true);
                    echo(isset($photo) ? '<img src ="' . $photo . '" class="img-fluid" style="width:400px; max-width:100%;" >' : null);
                    break;
            }
        }, 0, 2);
    }

    public function getPhotos($args, $category = '', $limit = -1)
    {
        $request = [
            'posts_per_page' => $limit,
            'offset'         => 0,
            'order'          => 'ASC',
            'orderby'        => 'menu_order',
            'post_type'      => 'photo',
            'post_status'    => 'publish',
        ];
        $request = array_merge($request, $args);

        if ($category != '') {
            $categoryArray        = [
                [
                    'taxonomy'         => 'gallery',
                    'field'            => 'slug',
                    'terms'            => $category,
                    'include_children' => false,
                ],
            ];
            $request['tax_query'] = $categoryArray;
        }
        $postList = get_posts($request);

        foreach ($postList as $post) {
            $outputArray[] = [
                'id'      => (isset($post->ID) ? $post->ID : null),
                'name'    => (isset($post->post_title) ? $post->post_title : null),
                'slug'    => (isset($post->post_name) ? $post->post_name : null),
                'url'   => (isset($post->photo_details_photo_file) ? $post->photo_details_photo_file : null),
            ];
        }

        return $outputArray;
    }

    public function getSinglePhoto($postId)
    {
        $event = $this->getPhotos([
            'include' => $postId
        ], '', 1)[0];

        return $event;
    }

    public function showGallery($atts = [])
    {
        $photos = $this->getPhotos(
            [],
            (isset($atts['category']) && $atts['category'] != '' ? $atts['category'] : ''),
            (isset($atts['limit']) && $atts['limit'] != '' ? $atts['limit'] : -1)
        );
        $templateOutput = '<photo-gallery :photos=\'' . json_encode($photos) . '\' ></photo-gallery>';

        return $templateOutput;
    }

    public function setupShortcode()
    {
        add_shortcode('photo_gallery', function ($atts) {
            return $this->showGallery($atts);
        });
    }
}
