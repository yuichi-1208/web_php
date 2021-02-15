<?php

require('../app/functions.php');

include('../app/_parts/_header.php');

$today = date('Y-m-d H:i:s l');
$names = [
  'Taro',
  'Jiro',
  'Saburo',
];

?>

  <p>Hello, PHP!</p>
  <p>Today: <?php echo date('Y-m-d H:i:s l'); ?></p>
  <p>Today: <?= date('Y-m-d H:i:s l'); ?></p>
  <p>Today: <?= $today; ?></p>
  <ul>
    <?php if (empty($names)): ?>
      <li>Nobody!</li>
    <?php else: ?>
    <?php foreach($names as $name): ?>
      <li><?= h($name) ?></li>
    <?php endforeach; ?>
    <?php endif; ?>
  </ul>

<?php

include('../app/_parts/_footer.php');