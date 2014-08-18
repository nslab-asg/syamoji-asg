<?php

$result = file_get_contents(
    'http://api.justyo.co/yo/',
    false,
  stream_context_create(
    array(
      'http' => array(
          'method' => 'POST',
        'header' => implode(
            "\r\n",
          array(
            'Content-Type: application/x-www-form-urlencoded'
          )
        ),
        'content' => http_build_query(
          array(
              'api_token' => '504627c6-eeff-78ab-5ae1-fada5eef127a',
            'username' => 'SYAMOJI'
          )
        )
      )
    )
  )
);

?>