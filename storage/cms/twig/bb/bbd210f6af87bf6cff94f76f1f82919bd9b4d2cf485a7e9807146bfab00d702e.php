<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/timeline/navbar.htm */
class __TwigTemplate_5abcec3b16da6fb85f8d37138cbd5993c023f34f6454d57625897c8ad6efaa99 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-fixed-top navbar-light navbar-expand-sm bg-info navbar-dark\">
  <form class=\"form-inline\" action=\"/action_page.php\">
    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
    <button class=\"btn btn-success\" type=\"submit\">Search</button>
  </form>
   <ul class=\"navbar-nav  ml-auto\">
   \t<li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Main Site</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-envelope\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-bell\"></span></a>
    </li>
    
</ul>

</nav>
<!--Tabs-->

<ul class=\"nav nav-tabs nav-justified\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#tab1default\" data-toggle=\"tab\">Timeline</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#tab2default\" data-toggle=\"tab\">New Articles</a>
  </li>
  <li class=\"nav-item ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
    <a class=\"nav-link\" href=\"#tab3default\" data-toggle=\"tab\">Jobs</a>
  </li>
  
  </ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/timeline/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 32,  28 => 8,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-fixed-top navbar-light navbar-expand-sm bg-info navbar-dark\">
  <form class=\"form-inline\" action=\"/action_page.php\">
    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
    <button class=\"btn btn-success\" type=\"submit\">Search</button>
  </form>
   <ul class=\"navbar-nav  ml-auto\">
   \t<li class=\"nav-item\">
      <a class=\"nav-link\" href=\"{{ 'home'|page }}\">Main Site</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-envelope\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span></a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\"><span class=\"glyphicon glyphicon-bell\"></span></a>
    </li>
    
</ul>

</nav>
<!--Tabs-->

<ul class=\"nav nav-tabs nav-justified\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#tab1default\" data-toggle=\"tab\">Timeline</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"#tab2default\" data-toggle=\"tab\">New Articles</a>
  </li>
  <li class=\"nav-item {% if( this.page.id == 'posts') %}active {% endif %}\">
    <a class=\"nav-link\" href=\"#tab3default\" data-toggle=\"tab\">Jobs</a>
  </li>
  
  </ul>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/timeline/navbar.htm", "");
    }
}
