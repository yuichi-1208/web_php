<?php

// セッションを使いますよという命令
session_start();

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}