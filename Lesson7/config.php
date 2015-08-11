<?php
// データベースの設定
$host = 'localhost';
$dbname = 'phphoge';
$charset = 'utf8';
$user = 'root';
$password = 'hogehoge';
$driver = 'mysql';
$connection = sprintf("%s:host=%s;dbname=%s;charset=%s",$driver,$host,$dbname,$charset);
define('CONNECTION',$connection);
define('DBUSER',$user);
define('DBPASSWORD',$password);
