<?php
print <<< EOF
<html>
<head>
<meta charset="utf-8" />
<title>syamoji</title>
</head>
<body>
    <form method="post">
      <input type="text" name="posterName" size="20">
      <input type="text" name="feederContent" size="80">
    </form>
</body>
</html>
EOF;
echo "hello feeder world!";
?>