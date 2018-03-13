<div class="contact-form" id="rsvp">
    <h3>RSVP</h3>
    <form method="post" >
        <input type="text" name="sec" value="" class="sec-form-code" style="position: absolute; left:-10000px; top:-10000px; height:0px; width:0px;" >
        <input type="hidden" name="event" value="{event-name}" >
        <div class="columns is-multiline">
            <div class="column is-6">
                <input type="text" name="first_name" class="input" placeholder="First Name" required>
            </div>
            <div class="column is-6">
                <input type="text" name="last_name" class="input" placeholder="Last Name" required>
            </div>
            <div class="column is-6">
                <input type="test" name="phone_number" class="input phone" placeholder="Phone Number" required>
            </div>
            <div class="column is-6">
                <input type="email" name="email_address" class="input email" placeholder="Email Address" required>
            </div>
            <div class="column is-narrow">
                <p>Number attending:</p>
            </div>
            <div class="column is-2">
                <select name="people" class="input people">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <div class="column is-12">
                <textarea class="textarea" name="message" placeholder="Is there anything else you would like us to know?"></textarea>
            </div>
            <div class="column is-12">
                <button class="button is-primary is-large" type="submit">submit</button>
            </div>
        </div>
    </form>
</div>