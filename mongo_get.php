<?php
// db connection
$mongo = new MongoClient(getenv('MONGOHQ_URL'));
// select collection
$doc = $mongo->app28134254->feedCollection;

// find
$feed = $doc->find(array('deleteFlag' => false))->sort(array('_id' => -1));

foreach ($feed as $id => $obj) {   
    // log
    //print_r($obj);
    // name post at date
    print($obj[name]."「".$obj[post]."」"." at ".$obj[date]);
    
    // del button
    //print("<button onclick='alert(\"".$obj[_id]."\");'>削除</button>");
    print("<button onclick='alert(\"".$obj[_id]."\");");
    $doc->update(array('_id' => $obj[_id]), array('$set' => array('deleteFlag' => true)));
    print("'>削除</button>");
    //print($obj[_id]);
    print("<br>");
}
?>