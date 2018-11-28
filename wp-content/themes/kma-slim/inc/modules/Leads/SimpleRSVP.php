<?php

namespace Includes\Modules\Leads;

class SimpleRSVP extends Leads
{
    public function __construct()
    {
        parent::__construct();
        parent::assembleLeadData(
            [
                'phone_number' => 'Phone',
                'event'        => 'Event',
                'message'      => 'Message'
            ]
        );
        parent::set('postType', 'RSVP Submission');
        parent::set('adminEmail', 'info@bcplfoundation.org');
    }

    protected function showForm($eventName)
    {
        $form          = file_get_contents(locate_template('template-parts/forms/rsvp-form.php'));
        $form          = str_replace('{event-name}', $eventName, $form);
        $formSubmitted = (isset($_POST['sec']) ? ($_POST['sec'] == '' ? true : false) : false);
        ob_start();
        if ($formSubmitted) {
            if ($this->handleLead($_POST)) {
                return '<message title="Success" class="is-success">Thank you for responding. See you there!</message>';
            } else {
                return '<message title="Error" class="is-danger">There was an error with your submission. Please try again.</message>';
                echo $form;

                return ob_get_clean();
            }
        } else {
            echo $form;

            return ob_get_clean();
        }
    }

    public function setupShortcode()
    {
        add_shortcode('rsvp_form', function ($atts) {
            return $this->showForm($atts['name']);
        });
    }

}