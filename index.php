<?php
print <<< EOF
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/feedStyle.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $.get('mongo_get.php', function(data){ $('#feedPage').html(data)});
    });
    var getBuf;
</script>
<title>syamoji</title>
</head>
<body>
    <input type="text" id="posterName" size="20">
    <input type="text" id="feederContent" size="80">
    <button id="postButton" onClick="$.post('mongo_insert.php',{feederName: $('#posterName').val(), feederPost: $('#feederContent').val()}).done(function(){alert('done!'); $('#feederContent').val(''); $.get('mongo_get.php', function(data){ getBuf += data;}); $('#feedPage').html(getBuf); getBuf='';});">投稿</button>
    <div id="feedPage"></div>
</body>
</html>
EOF;
echo "hello feeder world!";
?>