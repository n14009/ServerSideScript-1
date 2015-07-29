<?php 
session_start();

//ログイン状態のチェック
if (!isset($_SESSION["USERID"])) {
    header("Location:logout.php");
    exit;
}

echo "ようこそ" . $_SESSION['USERID'] . "さん";

?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="charset" content="UTF-8">
    <title>にわとりblog 入力</title>
  </head>
  <body>
    <h1>にわとりblog</h1>
    <form action="preview.php" method="POST">
      <label for="name">お名前</label>
      <input type="text" name="name"><br>
      <label for="article">記事本文</label>
      <textarea name="article" rows="8" cols="40"></textarea>
      <input type="submit" value="確認画面へ">
    </form>
    <form action="logout.php" method="POST">
      <input type="submit" value="logout"> 
    </form>
  </body>
</html>
