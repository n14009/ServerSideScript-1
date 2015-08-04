<?php
session_start();

if (!isset($_SESSION["USERID"])) {
  header("Location:login.php");
  exit;
}
unset($_SESSION['USERID']);
unset($_SESSION['PASSWORD']);

echo "ログアウトしました。";



?>
<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8">
<title>sample</title>
</head>
<body>
<a href="login.php">login画面に戻る</a>
</body>
</html>

