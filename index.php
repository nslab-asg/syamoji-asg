<?php
print <<< EOF
<html>
<head>
<meta charset="utf-8" />
<title>syamoji</title>
</head>
<body>
    <form method="post">
      <input type="text" name="posterName" size="30">
      <input type="text" name="feederContent" size="120">
    </form>
</body>
</html>
EOF;
echo "hello feeder world!";
?>