<div class="sticky-header-pad support"></div>
<section class="support-header"></section>
<section class="support-title">
    <div class="container">
        <h1 class="title is-1"><?php echo $headline; ?></h1>
        <?php echo($subhead != '' ? '<p class="subtitle is-white">' . $subhead . '</p>' : null); ?>
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php //kmaslim_posted_on(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>