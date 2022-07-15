<?php
// Instantiate a DateTime with microseconds.
$datetime = new DateTime();

$timezone = new DateTimeZone('Europe/Zurich');
$datetime->setTimezone($timezone);
echo $datetime->format('d/m/Y g:i A');
?>
