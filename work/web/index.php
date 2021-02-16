<?php

require('../app/functions.php');

// $color = filter_input(INPUT_COOKIE, 'color') ?? 'transparent';

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

    <select name="colors[]" multiple>
      <option value="orange">Orange</option>
      <option value="pink">Pink</option>
      <option value="gold">Gold</option>
    </select>

    <label for=""><input type="checkbox" name="fruits[]" value="apple">Apple</label>
    <label for=""><input type="checkbox" name="fruits[]" value="orange">Orange</label>
    <label for=""><input type="checkbox" name="fruits[]" value="banana">Banana</label>

    <label for=""><input type="radio" name="drink" value="cola">Cola</label>
    <label for=""><input type="radio" name="drink" value="water">Water</label>
    <label for=""><input type="radio" name="drink" value="redbull">RedBull</label>
<p>背景色</p>
    <label for=""><input type="radio" name="color" value="red">Red</label>
    <label for=""><input type="radio" name="color" value="blue">Blue</label>
    <label for=""><input type="radio" name="color" value="yellow">Yellow</label>

    <p><button>send</button></p>
  </form>

<?php

include('../app/_parts/_footer.php');