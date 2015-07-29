<?php

/* output.tpl */
class __TwigTemplate_e9e7d3eb3f81e30804d2880e37f77e669751705ab268b4e2244066c5d8c484ef extends Twig_Template
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
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta name=\"charset\" content=\"UTF-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./bootstrap.css\">
    <title>ロバblog output</title>
  </head>
  <body>
    <h1 class=\"text-success\">ロバblog output</h1>
    <hr />
    <h2 class=\"text-muted\">投稿者</h2>
    <p class = \"text-primary\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</p>
    <h2 class=\"text-muted\">本文</h2>
    <p class =\"text-primary\">
      ";
        // line 17
        echo nl2br(twig_escape_filter($this->env, (isset($context["article"]) ? $context["article"] : null), "html", null, true));
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
        return array (  39 => 17,  33 => 14,  19 => 2,);
    }
}
