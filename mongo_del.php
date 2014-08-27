<?php
// db connection
$mongo = new MongoClient(getenv('MONGOHQ_URL'));
// select collection
$doc = $mongo->app28134254->feedCollection;

// check get param
if (isset($_GET['delId']))
{
    // delete method
    // update key is _id
    $doc->update(array('_id' => new MongoId($_GET['delId'])), array('$set' => array('deleteFlag' => true)));

} else {
    return;
}


?>