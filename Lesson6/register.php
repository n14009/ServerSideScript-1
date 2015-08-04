<?php

//ハッシュ化に使用する定数
$salt = "mwefCMEP28DjwdW3lwdS239vVS";

$status = "none";
$pass = "hogehoge";
$password = crypt($pass, $salt);
echo $password;

?>

