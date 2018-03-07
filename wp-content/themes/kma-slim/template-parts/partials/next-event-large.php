<?php
use Includes\Modules\Events\Events;

$events = new Events();
$eventsArray = $events->getHomePageEvents(1);

//echo '<pre>',print_r($eventsArray),'</pre>';

if(count($eventsArray) > 0){
    $nextEvent = $eventsArray[0];
    $date = strtotime($nextEvent['start']);
?>
<div class="next-event-large">
    <div class="columns is-multiline is-aligned is-justified is-gapless">
        <div class="column event-photo column is-6-desktop" style="background-image: url(<?= $nextEvent['photo']; ?>)">
        </div>
        <div class="column event-details is-6-desktop">
            <div class="detail-container">
                <h2 class="title is-1">Join us</h2>
                <h3 class="title is-3"><?= $nextEvent['name']; ?></h3>
                <table>
                    <tr><td class="label">TIME:</td><td><?= $nextEvent['time']; ?></td></tr>
                    <tr><td class="label">DATE:</td><td><?= date('l, F jS', $date); ?></td></tr>
                    <tr><td class="label">LOCATION:</td><td><?= nl2br($nextEvent['location']); ?></td></tr>
                </table>
                <p><a class="button is-primary is-outlined is-rounded" href="<?= $nextEvent['link']; ?>" >EVENT DETAILS & TICKETS</a></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>