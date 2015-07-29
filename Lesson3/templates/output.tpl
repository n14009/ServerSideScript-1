{% autoescape %}

<!DOCTYPE html>
<html>
  <head>
    <meta name="charset" content="UTF-8">
    <link rel="stylesheet" type="text/css" href="./bootstrap.css">
    <title>ロバblog output</title>
  </head>
  <body>
    <h1 class="text-success">ロバblog output</h1>
    <hr />
    <h2 class="text-muted">投稿者</h2>
    <p class = "text-primary">{{name}}</p>
    <h2 class="text-muted">本文</h2>
    <p class ="text-primary">
      {{article|nl2br}}
    </p>
  </body>
</html>
{% endautoescape %}
