<?php //config
    $business = '';
    $buttonHandle = '_donations';
    $itemName = '';
    $itemNumber = '';
    $currencyCode = 'USD';
?>
<div class="donate-form">

    <h3>I want to donate:</h3>
    <div class="columns is-aligned is-multiline is-mobile">
        <div class="column is-6-mobile is-3-tablet">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" class="input" name="amount" value="500">
                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="item_name" value="<?= $itemName; ?>">
                <input type="hidden" name="item_number" value="<?= $itemNumber; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">
                <button type="submit" class="button is-info is-large is-fullwidth">$500</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
        </div>
        <div class="column is-6-mobile is-3-tablet">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" class="input" name="amount" value="250">
                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="item_name" value="<?= $itemName; ?>">
                <input type="hidden" name="item_number" value="<?= $itemNumber; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">
                <button type="submit" class="button is-info is-large is-fullwidth">$250</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
        </div>
        <div class="column is-6-mobile is-3-tablet">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" class="input" name="amount" value="100">
                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="item_name" value="<?= $itemName; ?>">
                <input type="hidden" name="item_number" value="<?= $itemNumber; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">
                <button type="submit" class="button is-info is-large is-fullwidth">$100</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
        </div>
        <div class="column is-6-mobile is-3-tablet">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" class="input" name="amount" value="50">
                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="item_name" value="<?= $itemName; ?>">
                <input type="hidden" name="item_number" value="<?= $itemNumber; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">
                <button type="submit" class="button is-info is-large is-fullwidth">$50</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
        </div>
    </div>

    <h3>Or donate a custom amount:</h3>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <div class="columns is-aligned is-mobile">
            <div class="column is-12-mobile is-narrow">
                <div class="control has-icons-left">
                    <input type="text" class="input is-large" name="amount" value="" placeholder="">
                    <span class="icon is-small is-left is-medium">
                        <i class="fa">$</i>
                      </span>
                </div>

                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="item_name" value="<?= $itemName; ?>">
                <input type="hidden" name="item_number" value="<?= $itemNumber; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">

            </div>
            <div class="column is-12-mobile is-narrow">
                <button type="submit" class="button is-large is-primary is-fullwidth-mobile">Donate</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </div>
        </div>

    </form>
</div>
