<?php
use Includes\Modules\Helpers\PageField;
$field = new PageField();
$homeId = get_option('page_on_front');
?>
<div class="get-involved">
    <div class="columns is-multiline is-aligned is-justified is-gapless">
        <div class="column get-involved-photo column is-6-desktop" style="background-image: url(<?= $field->getField('get_involved_section_photo', $homeId); ?>)">
        </div>
        <div class="column get-involved-details is-6-desktop">
            <div class="detail-container">
                <h2 class="title is-1" ><?= $field->getField('get_involved_section_title', $homeId); ?></h2>
                <?= $field->getField('get_involved_section_text', $homeId); ?>
            </div>
        </div>
    </div>
</div>
