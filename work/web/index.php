<?php

$today = date('Y-m-d H:i:s l');
$name = 'Taro <script>alert(1);</script>';

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, PHP!</p>
  <p>Today: <?php echo date('Y-m-d H:i:s l'); ?></p>
  <p>Today: <?= date('Y-m-d H:i:s l'); ?></p>
  <p>Today: <?= $today; ?></p>
  <p>Hello, <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>