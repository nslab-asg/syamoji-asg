<?php

$SECRET_KEY = 'd1728277fcde41c821a80e792ab3b09b';

if (isset($_GET['key']) && $_GET['key'] === $SECRET_KEY)
{
    $result = file_get_contents(
        'http://api.justyo.co/yoall/',
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
                            'api_token' => 'f27a53a0-5e20-c620-cd49-ea6ce2ff12a9'
                        )
                    )
                )
            )
        )
    );
}

?>