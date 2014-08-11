<?php

// db connection
$mongo = new MongoClient(getenv('MONGOHQ_URL'));
// select collection
$doc = $mongo->app28134254->feedCollection;

// get post parameter
$name = $_POST['feederName'];
$post = $_POST['feederPost'];

// set timezone
date_default_timezone_set('Asia/Tokyo');

// query string
$a = array('name' => $name,
           'post' => $post,
           'date' => date(DATE_RFC2822));

// insert
$doc->insert($a);

?>