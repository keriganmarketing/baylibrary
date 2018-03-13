<div class="container">
    <form role="search" method="get" action="<?= get_site_url(); ?>" class="search-form">
        <div class="columns is-multiline is-aligned is-justified">
            <div class="column is-narrow">
                <h4 class="title font-signpainter is-1">Site search:</h4>
            </div>
            <div class="column is-narrow">
                <input placeholder="Search …" value="" name="s" class="input search-field" type="search">
            </div>
            <div class="column is-narrow">
                <button type="submit" value="Search" class="search-submit button is-primary is-outlined is-rounded">GO</button>
            </div>
        </div>
    </form>
</div>