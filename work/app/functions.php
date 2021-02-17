<?php

// セッションを使いますよという命令
session_start();

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// CSRF（他のページのフォームからデータが送られる（action属性とnameが一致していれば））対策のためトークンを作成
function createToken()
{
  if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
}

// トークンのチェック
function validateToken()
{
  if (
    empty($_SESSION['token']) ||
    $_SESSION['token'] !== filter_input(INPUT_POST, 'token')
  ) {
    exit('Invalid post request');
  }
}