<div class="sidebar columns is-multiline">
<?php
if(!isset($sidebars) ) {
    $sidebars = $layouts->getSidebars($post);
}
if(count($sidebars) > 0) {
    foreach ($sidebars as $sidebar) { ?>
        <div class="column is-6-tablet is-12-desktop">
            <div class="sidebar-section <?= $sidebar; ?>">
                <?php include(locate_template('template-parts/sidebars/' . $sidebar . '.php')); ?>
            </div>
        </div>
    <?php }
}?>
</div>
