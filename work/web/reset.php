<?php

setcookie('color', '');

// header を使うときは前にechoを使ったり、phpの開始タグの前にhtmlタグを書いてはいけないというルールがある
header('Location: http://localhost:8081/index.php');