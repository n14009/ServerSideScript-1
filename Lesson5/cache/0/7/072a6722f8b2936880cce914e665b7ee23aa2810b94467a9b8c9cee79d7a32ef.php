<?php

/* list.tpl */
class __TwigTemplate_072a6722f8b2936880cce914e665b7ee23aa2810b94467a9b8c9cee79d7a32ef extends Twig_Template
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\">
    <title>にわとりblog 記事一覧</title>
  </head>
  <body>
    <header>
      <h1>にわとりblog 記事一覧</h1>
    </header>
       <div> 
        <ul>
        <li><span class=\"dan\">作成日</span><span class=\"dan2\">内容</span></li>
        </ul>
       </div>
        <ul>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "          <li>
          <span class=\"dan\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "create_date", array()), "html", null, true);
            echo "</span>
          <span class=\"dan2\"> <a href=\"view.php?id=";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "article", array()), "html", null, true);
            echo "</a></span>
          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
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
        return array (  60 => 24,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }
}
