<?php
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "Accept-language: en\r\n"
    )
);

$context = stream_context_create($opts);

$file = file_get_contents('http://syamoji-asg.herokuapp.com/', false, $context);

?>