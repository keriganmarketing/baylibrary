<?php //config
    $business = 'Bay County Public Library Foundation';
    $buttonHandle = '_s-xclick';
    $currencyCode = 'USD';
    $hostedButtonId = 'RHNXKD4MCYETJ';
    $hostedButtonId50 = 'QR8RX85QUHPUU';
    $hostedButtonId100 = 'P64DD7AZKE9HY';
    $hostedButtonId250 = 'EPF4PPJ37WYK4';
    $hostedButtonId500 = 'SV6KS5S7437KS';

    /* PayPal Button Code
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="RU9D4TAQVLH9S">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    50
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="QR8RX85QUHPUU">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    100
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="P64DD7AZKE9HY">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    250
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="EPF4PPJ37WYK4">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

    500
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="SV6KS5S7437KS">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>

     */
?>

<div class="donate-form">

    <h3>I want to donate:</h3>
    <div class="columns is-aligned is-multiline is-mobile">
        <div class="column is-6-mobile is-3-tablet">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" class="input" name="amount" value="500">
                <input type="hidden" name="business" value="<?= $business; ?>">
                <input type="hidden" name="cmd" value="<?= $buttonHandle; ?>">
                <input type="hidden" name="hosted_button_id" value="<?= $hostedButtonId500; ?>">
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
                <input type="hidden" name="hosted_button_id" value="<?= $hostedButtonId250; ?>">
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
                <input type="hidden" name="hosted_button_id" value="<?= $hostedButtonId100; ?>">
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
                <input type="hidden" name="hosted_button_id" value="<?= $hostedButtonId50; ?>">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">
                <button type="submit" class="button is-info is-large is-fullwidth">$50</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </form>
        </div>
    </div>

    <h3>Or donate a specific amount:</h3>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">

        <div class="columns is-aligned is-mobile">
            <div class="column is-12-mobile is-narrow">
                <div class="control has-icons-left">
                    <input type="text" class="input is-large" name="amount" value="" placeholder="">
                    <span class="icon is-small is-left is-medium">
                        <i class="fa">$</i>
                    </span>
                </div>

                <input type="hidden" name="business" value="donations@booksalive.net">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="currency_code" value="<?= $currencyCode; ?>">

            </div>
            <div class="column is-12-mobile is-narrow">
                <button type="submit" class="button is-large is-primary is-fullwidth-mobile">Donate</button>
                <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
            </div>
        </div>

    </form>
</div>
