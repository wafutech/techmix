<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/login.htm */
class __TwigTemplate_2ad3ef7ff104034df35b98b8db7cd447b5bed1d9aca6196d6312ff699e936352 extends Twig_Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("account/signin"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'account/signin' %}", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/login.htm", "");
    }
}
