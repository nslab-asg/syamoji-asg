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
    print("$.get(\"mongo_del.php?delId=\"".$obj[_id]."\"\").done(function(){ $(\"#feederContent\").val(\"\");$.get(\"mongo_get.php\", function(data){ getBuf += data;});$(\"#feedPage\").html(getBuf); getBuf=\"\";});;");

    print("'>削除</button>");
    //print($obj[_id]);
    print("<br>");
}
?>