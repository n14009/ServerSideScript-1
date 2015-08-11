Blogの機能をまとめてみよう -クラスの話-
======================================

Lesson6までのプログラムは1つの.phpファイルに1つの機能が実装されています。

純粋に[../Lesson6/list.php](../Lesson6/list.php)にアクセスすると記事の一覧が表示され、
input.htmlから[../Lesson6/add.php](../Lesson6/add.php)にPOSTすると記事がデータベースに
登録されます。

一見このような流れはわかりやすいのですが、「blog」という仕組み全体から見た時に

* 一覧表示用のプログラム
* 投稿用のプログラム
* データベースから記事を取得するためのプログラム

が、バラバラに書かれていることになります。

だったら一つのファイルにまとめてしまって、
それぞれのページ(ここでいうページはlist.phpとかadd.phpのこと)はそのプログラムを
require_onceして機能を呼び出してあげたほうがプログラムもシンプルになると思います。

というわけで、そういうのをまとめる時に使用する「クラス」という考え方です。

クラス?
-------------------------------

[PHP公式ドキュメントのクラスのページ](http://php.net/manual/ja/language.oop5.basic.php)見ていろいろ理解してください…って
書こうと思ったのですが、多分サンプルのプログラムを見たほうが早いです。

まず[Blog.php](Blog.php)を見てください。いままでadd.phpや、list.php、view.phpで
書いてあったデータベースに登録するような処理が全部書かれています。

それぞれの処理を`function addArticle()`や`function getArticles()`という名前をつけて
命令を呼び出せるようにしてあります。

最初にある`function __construct()`はBlogの機能を使用するにあたって、事前にデータベースに接続するように、
そのプログラムを使用すると決めた時点でやっておかないといけない処理を書いてあります。
この部分のことを *コンストラクター* といいます。

最後にある `function __destruct()`はBlogの機能を使用し終わった時に最後の片付けを
行なう部分です。今回の例だとデータベースとの接続を切断します。
この後片付けの部分のことを *デストラクター* といいます。

ここで作成したBlog.phpの機能を呼び出してLesson6で作ったプログラムを書き直してみると…

|Lesson6|Lesson7|
|-------|-------|
|[add.php](../Lesson6/add.php)|[add.php](../Lesson7/add.php)|
|[preview.php](../Lesson6/preview.php)|[preview.php](../Lesson7/preview.php)|
|[list.php](../Lesson6/list.php)|[list.php](../Lesson7/list.php)|
|[view.php](../Lesson6/view.php)|[view.php](../Lesson7/view.php)|
|-------|[Blog.php](../Lesson7/Blog.php)|

どっちがわかりやすく見えますか?

クラスをうまく作ることで、機能を分離したり、プログラミングの役割分担がしやすくなったり、
コードが見やすくなったりといろいろなメリットがあります。

ただ、一つのクラスの中になんでもかんでも機能を突っ込みすぎてしまうと
プログラムの見通しが悪くなったり、余計ごちゃごちゃしてしまうので
「一つのクラスに一つの役割」という感じで考えてもらったらいいかと思います。

### 課題1

今のところこのBlogには記事の削除機能がありません。

Blog.phpにfunction removeArticleを作成し、指定した記事IDの記事を削除できるようにしなさい。

また、list.phpの記事への表示用リンクの隣に削除用リンクを作成し、1クリックで削除できるようにしなさい。