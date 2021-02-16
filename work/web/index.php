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

  <form action="result.php" method="get">
    <input type="text" name="message">
    <input type="text" name="username">

    <textarea name="message_area"></textarea>

    <select name="color" id="">
      <option value="orange">Orange</option>
      <option value="pink">Pink</option>
      <option value="gold">Gold</option>
    </select>

    <button>send</button>
  </form>

<?php

include('../app/_parts/_footer.php');