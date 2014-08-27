<?php
// db connection
$mongo = new MongoClient(getenv('MONGOHQ_URL'));
// select collection
$doc = $mongo->app28134254->feedCollection;

// find
$feed = $doc->find(array('_id' => new MongoId('53e8de53964c133e008b4567')));//false))->sort(array('_id' => -1));
print_r($feed);
if (isset($_GET['delId']))
{
    foreach($feed as $id => $obj) {   
        $gg = $doc->update(array('_id' => $obj[_id]), array('$set' => array('deleteFlag' => true)));
        print_r($gg);
        print($_GET['delId']);
    }   
} else {
    return;
}


?>