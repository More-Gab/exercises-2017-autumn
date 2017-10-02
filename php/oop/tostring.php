<?php

require_once 'recipient.php';

$recipient = new recipient();
$recipient->email = 'jan.polak@data4you.cz';

echo 'The email was sent to ' . $recipient;