<?php
require '../../lib/Twig-1.18.2/lib/Twig/Autoloader.php';

Twig_Autoloader::register(); // Twigを使う時のおまじない
$loader = new Twig_Loader_Filesystem('./templates'); // Twigで使用するテンプレートファイルを格納する場所

// Twigの設定
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache'
));

// データベースの設定
$host = 'localhost';
$dbname = 'exercises';
$charset = 'utf8';
$user = 'root';
$password = 'hogehoge';
$driver = 'mysql';
$connection = sprintf("%s:host=%s;dbname=%s;charset=%s",$driver,$host,$dbname,$charset);
$dbh = new PDO($connection,$user,$password);
// エラーが起きたら例外を投げる…
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ここからがadd.phpと違うところ。データ呼び出してみるよ!
$query = 'SELECT id,id,name,class,create_date,score FROM exe WHERE id = :id';
$stmt = $dbh->prepare($query);
$stmt->bindValue(":id",$_GET['id'],PDO::PARAM_INT); // id(ページID)が1のものを表示してます。
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_OBJ);


// var_dump($data); // デバッグコード
// Twigにはめこむ
// templatesディレクトリにある *output.tpl* の {{article}}と{{name}}と{{create_date}}に受け取ったデータを嵌め込んで表示する

print($twig->render('output.tpl',
  array('id'=>$data->id,'name'=> $data->name,'class'=> $data->class,'create_date'=> $data->create_date,'score'=> $data->score)
      )
    );
// データベースの接続を終了する
unset($dbh);
