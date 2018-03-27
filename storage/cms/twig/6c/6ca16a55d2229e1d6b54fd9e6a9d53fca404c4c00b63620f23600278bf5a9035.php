<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/contact.htm */
class __TwigTemplate_008373b5c1ffc81edeb16a27bf870f413b435f46597806fe4bf85c70130925d9 extends Twig_Template
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
        echo "<hr>
";
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("contactform.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<hr>
{% content \"contactform.htm\" %}", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/contact.htm", "");
    }
}
