<?php

require 'IvonaClient.php';

$ivona = new IvonaClient();

$text =  $_GET['t'];

header('Content-type: audio/mpeg');
echo $ivona->get($text)

?>
