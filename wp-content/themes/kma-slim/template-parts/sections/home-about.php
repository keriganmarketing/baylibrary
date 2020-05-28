<div class="home-about">
    <div class="gradient">
    <div class="container">
        <div class="photo is-hidden-desktop">
            <img src="<?php echo get_template_directory_uri() . '/img/martin-theater.jpg'; ?>" alt="<?= bloginfo(); ?>">
        </div>
        <div class="columns">
            <div class="column content is-5-desktop">
                <h2 class="title is-1"><?php echo $headline; ?></h2>
                <?php echo ($subhead!='' ? '<p class="subtitle">'.$subhead.'</p>' : null); ?>
                <p><em>Our Mission:</em> To promote literacy and provide cultural enrichment that enhances the Bay County Library System and strengthens the community.</p> <p>Since its incorporation in 1983, the Foundation has raised and donated thousands of dollars to enhance the quality of life in Bay County.</p>
                <a href="#" class="button button-primary is-outlined is-rounded" >More About Us</a>
            </div>
        </div>
    </div>
    </div>
</div>