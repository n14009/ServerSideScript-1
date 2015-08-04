<?php
  session_start();

  //エラーメッセージ
  $errorMessage = "";
  
//  $viewUserId = htmlspecialchars($_POST['USERID'], ENT_QUOTES);

  //ログインボタンが押されたとき
  if (isset($_POST["login"])) {
   $salt = "mwefCMEP28DjwdW3lwdS239vVS";
   $pass = crypt($_POST["password"],  $salt);
   if ($_POST["userid"] == "root" && $pass == "mwPSzCPfXgSJU" 
   
    ) {
      session_regenerate_id(TRUE);
      $_SESSION["USERID"] = $_POST["userid"];
      header("Location: input.php");
      exit;
    } else {
      $errorMessage = "まちがえているよ(> <)";
    }

   }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  
<body>
  <form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <legend>ログインフォーム</legend>
    <div><?php echo $errorMessage ?></div>
    <label for="userid">ユーザID</label><input type="text" id="userid" name="userid" value="">
    <br>
    <label for="password">パスワード</label><input type="password" id="password" name="password" value="">
    <br>
    <label></label><input type="submit" id="login" name="login" value="ログイン">
  </fieldset>
  </form>
  </body>
</html>
