<?php
include 'tegrabot.php';

sendMessage('/start', 'Welcome! This is a telegram bot that is based on the @TegraBot_off framework');
sendMessage('/test', '1 message', "sendMessage('/a', '2 message');");
sendPhoto('/testphoto', 'https://yt3.ggpht.com/yti/ANoDKi4MFxMBb5KrloiKZJVZn04TgGu1HBIj4fL_12FALQ=s88-c-k-c0x00ffffff-no-rj-mo');
//
defaultMessage("Oops ... Sorry, I don't understand you.");
?>
