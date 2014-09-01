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
    // print table tag
    print("<table border=0 cellspacing=0><tr><td rowspan=3>");
    // name post at date
    print($obj[name]."</td><td class=\"feedViewUpside\">pen x</td></tr>");
    print("<tr><td class=\"feedViewMiddleside\">");
    print("「".$obj[post]."」</td></tr><tr><td class=\"feedViewDownside\">");
    print(date('Y年n月j日 g時i分s秒', strtotime($obj[date]))."</td></tr></table> <br>");
    
    // del button
    //print("<button onclick='alert(\"".$obj[_id]."\");'>削除</button>");
    print("<button onclick='alert(\"".$obj[_id]."\");");
    print("$.get(\"mongo_del.php?delId=".$obj[_id]."\").done(function(){ $(\"#feedPage\").val(\"\");$.get(\"mongo_get.php\", function(data){ getBuf += data;});$(\"#feedPage\").html(getBuf); getBuf=\"\";});;");
    //$gg = $doc->update(array('_id' => $obj[_id]), array('$set' => array('deleteFlag' => true)));
    print("'>削除</button>");
    //print($obj[_id]);
    print("<br>");
}
?>