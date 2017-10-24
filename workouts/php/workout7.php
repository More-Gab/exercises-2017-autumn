<?php

require 'messages.php';

// messages::loadFlashedMessages();

// something happens
// messages::error('The calibrators are not calibrated.');

// messages::flashMessages();

foreach(messages::getMessages() as $type => $messages)
{
    foreach($messages as $message)
    {
        echo '<div class="message '.$type.'">'.$message.'</div>';
    }
}