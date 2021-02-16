<?php

require('../app/functions.php');

//フォームから送られてきた値を受け取るにはfilter_input
//trimは空白を削除する
$message = trim(filter_input(INPUT_GET, 'message'));
$message = $message !== '' ? $message : '...';
$username = filter_input(INPUT_GET, 'username');

include('../app/_parts/_header.php');

?>

<p><?= h($message); ?> by <?= h($username); ?></p>
<p><a href="index.php">Go back</a></p>

<?php

include('../app/_parts/_footer.php');