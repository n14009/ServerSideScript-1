<?php

/* list.tpl */
class __TwigTemplate_4d61a506e5150c4c77d398c476663cdb1b65efe58b8b2d1faedab7db99bc4b64 extends Twig_Template
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
    <title>にわとりblog 記事一覧</title>
  </head>
  <body>
    <header>
      <h1>にわとりblog 記事一覧</h1>
    </header>
    <table>
      <thead>
        <tr>
          <th>作成日</th><th>内容</th><th>リンク</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "        <tr>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "create_date", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article", array()), "html", null, true);
            echo "</td>
          <td><a href=\"view.php?id=";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">リンク</a><td>
          <td><a href=\"delete.php?id=";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">記事削除</a><td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </tbody>
    </table>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "list.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 26,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
