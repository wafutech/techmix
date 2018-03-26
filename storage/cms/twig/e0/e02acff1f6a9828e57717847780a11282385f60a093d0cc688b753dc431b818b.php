<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/site/header.htm */
class __TwigTemplate_db585cfd9314966e5acd377c024affdad56c0b022c0c9068b0b364ce184ddaa1 extends Twig_Template
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
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    ";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 6
        echo "    <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/clean-blog.min.css"));
        // line 9
        echo "\" rel=\"stylesheet\">

</head>
<body>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{{ this.page.title }}</title>
    {% styles %}
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/clean-blog.min.css'
        ]|theme }}\" rel=\"stylesheet\">

</head>
<body>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/header.htm", "");
    }
}
