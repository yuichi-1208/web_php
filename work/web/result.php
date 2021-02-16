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

include('../app/_parts/_header.php');

?>

<p><?= h($message); ?> by <?= h($username); ?></p>
<!-- nl2br = new line 2 brは改行を表示してくれる -->
<p><?= nl2br(h($message_area)); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');