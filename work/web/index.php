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

// 定数を定義（同じ変数を2回以上定義しているときは、まとめて定数にする）
define('FILENAME', '../app/messages.txt');

// $_SERVERはpostにデータが送信されたかどうか(postでアクセスしたかどうか)を確かめる
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // post形式でデータを受け取る
  $message = trim(filter_input(INPUT_POST, 'message'));
  $message = $message !== '' ? $message : '...';

  // $filename = '../app/messages.txt';
  // 定数を使う
  $fp = fopen(FILENAME, 'a');
  fwrite($fp, $message . "\n");
  fclose($fp);

  // 処理が終わった後に結果を表示するページにリダイレクトしてあげる必要があるためheader関数を使う。
  header('Location: http://localhost:8081/result.php');
  // header関数は上記のスクリプト（if分の中の処理（header関数よりの上の処理））が終了した後に実行されるため、これ以降の命令を実行させずにリダイレクトさせるには、exit を追記
  exit;
}

// postで送信されなかった場合は以下の処理が走る
// $filename = '../app/messages.txt';
// 定数を使う
$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

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

  <!-- <form action="result.php" method="get">
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
    <p><a href="reset.php">[reset]</a></p>
  </form> -->

  <ul>
  <?php foreach ( $messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
  </ul>

  <!-- <form action="result.php" method="post"> -->
  <!-- 二重投稿（リロードした時にフォームの内容がもう一度送信されてしまう）を避けるために、データを処理するファイルと結果を処理するファイルを分けるというテクニックを使用 -->
  <!-- データの処理をindex.phpにする -->
  <!-- <form action="index.php" method="post"> -->
  <!-- このファイル自体で処理をしたい場合は、action属性は空でも良い -->
  <form action="" method="post">
    <input type="text" name="message">
    <button>Post</button>
  </form>

<?php

include('../app/_parts/_footer.php');