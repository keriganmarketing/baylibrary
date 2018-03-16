<?php
/**
 * Created by PhpStorm.
 * User: Bryan
 * Date: 7/13/2017
 * Time: 12:02 PM
 */

$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');

?>
<div class="search-result column is-12">
    <h2 class="title"><a href="<?= get_permalink(); ?>" ><?= $headline; ?></a></h2>
    <?= wp_trim_words($post->post_content,20, '... <a href="'.get_permalink().'" >read more.</a>'); ?>
<hr>
</div>

