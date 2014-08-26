<?php
// db connection
$mongo = new MongoClient(getenv('MONGOHQ_URL'));
// select collection
$doc = $mongo->app28134254->feedCollection;

// find
//$feed = $doc->find(array('deleteFlag' => false))->sort(array('_id' => -1));

if (isset($_GET['delId']))
{
    $doc->update(array('_id' => $_GET['delId']), array('$set' => array('deleteFlag' => true)));
    print($_GET['delId']);
} else {
    return;
}

?>