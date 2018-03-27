<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/questions/showquestion.htm */
class __TwigTemplate_bb729575aa1e575e6c2f03c6962ddb46a3b42f798576a546aae82f823c3fab67 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, ($context["question"] ?? null), "html", null, true);
        echo "</h2>

<p>";
        // line 3
        echo twig_escape_filter($this->env, ($context["detail"] ?? null), "html", null, true);
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/questions/showquestion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>{{question}}</h2>

<p>{{detail}}</p>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/questions/showquestion.htm", "");
    }
}
