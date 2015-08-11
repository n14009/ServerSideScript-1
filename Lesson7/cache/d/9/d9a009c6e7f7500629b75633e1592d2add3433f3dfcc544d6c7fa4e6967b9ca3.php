<?php

/* delete.tpl */
class __TwigTemplate_d9a009c6e7f7500629b75633e1592d2add3433f3dfcc544d6c7fa4e6967b9ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"charset\" content=\"UTF-8\">
    <title>delete id</title>
  </head>
  <body>
  <p>記事を削除しました。</p>
  <a href=\"list.php\">記事一覧に戻る</a> 

  </body>
  </html>

";
    }

    public function getTemplateName()
    {
        return "delete.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
