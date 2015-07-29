<?php

/* done.tpl */
class __TwigTemplate_c051eefa88c15b4f5bd84cfc424e6ec5933b6b1b9d38c7a5dd0fcaae539e8268 extends Twig_Template
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
    <title>学生情報 保存完了!</title>
  </head>
  <body>
    <h1>学生情報 保存完了</h1>
    <h2>学生番号</h2>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</p>
    <h2>学生番号</h2>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
    <h2>学科</h2>
    <p>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "</p>
    <h2>更新日時</h2>
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
        // line 20
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
        echo "
    </p>
    で、投稿しました!
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "done.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  50 => 18,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
    }
}
