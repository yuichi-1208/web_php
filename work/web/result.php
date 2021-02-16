<?php

require('../app/functions.php');

//フォームから送られてきた値を受け取るにはfilter_input
//trimは空白を削除する
$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';
$message_area = trim(filter_input(INPUT_GET, 'message_area'));
$message_area = $message_area !== '' ? $message_area : '...';
$username = trim(filter_input(INPUT_GET, 'username'));
$username = $username !== '' ? $username : '...';
$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
// setcookieを使うときは前にechoを使ったり、phpの開始タグの前にhtmlタグを書いてはいけないというルールがある
setcookie('color', $colorFromGet);
$colors = filter_input(INPUT_GET, 'colors', FILTER_DEFAULT, FILTER_FORCE_ARRAY );
$colors = empty($colors) ? 'None selected' : implode(',', $colors);
$fruits = filter_input(INPUT_GET, 'fruits', FILTER_DEFAULT, FILTER_FORCE_ARRAY );
$fruits = empty($fruits) ? 'None selected' : implode(',', $fruits);
// $drink = filter_input(INPUT_GET, 'drink');
// 値が渡されているかどうか（nullかそうでないか）は、issetを使って判別
// $drink = isset($color) ? $color : 'None selected';
// 値がセットされていなかったら、自動的に別の値をセットする
// ?? は null合体演算子と呼ばれる
// $drink = $color ?? 'None selected';
$drink = filter_input(INPUT_GET, 'drink') ?? 'None selected';

include('../app/_parts/_header.php');

?>

<p><?= h($message); ?> by <?= h($username); ?></p>
<!-- nl2br = new line 2 brは改行を表示してくれる -->
<p><?= nl2br(h($message_area)); ?></p>
<p><?= h($colorFromGet); ?></p>
<p><?= h($colors); ?></p>
<p><?= h($fruits); ?></p>
<p><?= h($drink); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');