<?php

/* output.tpl */
class __TwigTemplate_ebcdb4fd9c3a704067b9a4c8b1f58339db9d42c292d633327a8de8858247e64a extends Twig_Template
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
    <title>学生情報 表示画面</title>
  </head>
  <body>
    <h1>学生情報 表示画面</h1>
    <h2>学籍番号</h2>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</p>
    <h2>投稿者</h2>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
    <h2>学科名</h2>
    <p>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "</p>
    <h2>投稿日</h2>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["create_date"]) ? $context["create_date"] : null), "html", null, true);
        echo "</p>
    <h2>score</h2>
    <p>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : null), "html", null, true);
        echo "</p>
      ";
        // line 19
        echo nl2br(twig_escape_filter($this->env, (isset($context["exe"]) ? $context["exe"] : null), "html", null, true));
        echo "
    </p>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "output.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  50 => 18,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
    }
}
