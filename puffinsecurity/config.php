<?php
// DB connection
$config=array(
    'DB_HOST'=>'localhost',
    'DB_USERNAME'=>'root',
    'DB_PASSWORD'=>'',
    'DB_DATABASE'=>'puffinsecurity'
);
$allowed_devices = 3;
$login_attempts = 3;
$lockout_time = 15;
$presentation = array(
    "PRESENTATION_PATH" => "../updates/presetations",
    "INVITATION_PATH" => "../updates/invitations"
);
?>