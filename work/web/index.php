<?php

require('../app/functions.php');

$today = date('Y-m-d H:i:s l');
$names = [
  'Taro',
  'Jiro',
  'Saburo',
];

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
  <ul>
    <?php if (empty($names)) { ?>
      <li>Nobody!</li>
    <?php } else { ?>
    <?php foreach($names as $name) { ?>
      <li><?= h($name) ?></li>
    <?php } ?>
    <?php } ?>
  </ul>
</body>
</html>