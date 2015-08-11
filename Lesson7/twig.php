<?php
require '../lib/Twig-1.18.2/lib/Twig/Autoloader.php';
Twig_Autoloader::register(); // Twigを使う時のおまじない
$loader = new Twig_Loader_Filesystem('./templates'); // Twigで使用するテンプレートファイルを格納する場所
// Twigの設定
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache'
));
