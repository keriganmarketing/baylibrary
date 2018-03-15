<?php
use Includes\Modules\Events\Events;

$events = new Events();
$eventsArray = $events->getHomePageEvents(1);

//echo '<pre>',print_r($eventsArray),'</pre>';

if(count($eventsArray) > 0){
    $nextEvent = $eventsArray[0];
    $date = strtotime($nextEvent['start']);
?>
<div class="next-event">
    <div class="container">
        <div class="columns is-multiline is-aligned is-justified">
            <div class="column is-narrow">
                <h4 class="title font-signpainter is-1">Our next event:</h4>
            </div>
            <div class="event-details">
                <h4 class="title is-4 is-semibold"><?= $nextEvent['name']; ?></h4>
                <p class="subtitle"><?= date('l, F jS', $date); ?>, <?= $nextEvent['time']; ?> &nbsp; <a href="<?= $nextEvent['link']; ?>" >RSVP ONLINE</a></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>