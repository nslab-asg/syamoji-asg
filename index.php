<?php
print <<< EOF
<html>
<head>
<meta charset="utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<title>syamoji</title>
</head>
<body>
    <form method="post">
      <input type="text" name="posterName" size="20">
      <input type="text" name="feederContent" size="80">
      <button id="postButton">投稿</button>
    </form>
</body>
</html>
EOF;
echo "hello feeder world!";
?>