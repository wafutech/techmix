<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/freelance/freelancenavbar.htm */
class __TwigTemplate_bb0b82b6c65ba720bb54167ea2fb98189fa344b242f0c4be10a2f3f3b4a5008b extends Twig_Template
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
        echo "<header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"#intro\" class=\"scrollto\"><img src=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wafutech.png");
        echo "\" width=\"50\" height=\"50\" alt=\"Logo\"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li class=\"menu-active\"><a href=\"#intro\">Home</a></li>
          <li><a href=\"#about\">About Us</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#portfolio\">Portfolio</a></li>
          <li><a href=\"#team\">Team</a></li>
          <li><a href=\"#\">Web Dev</a></li>
          <li><a href=\"#services\">Mobile Dev</a></li>
          <li><a href=\"#\">Design</a></li>
          <li><a href=\"#\">Tech Bloggers</a></li>
          <li class=\"menu-has-children\"><a href=\"\">More</a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
              <li><a href=\"#\">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/freelance/freelancenavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\">
    <div class=\"container-fluid\">

      <div id=\"logo\" class=\"pull-left\">
        <h1><a href=\"#intro\" class=\"scrollto\"><img src=\"{{'assets/images/wafutech.png'|theme}}\" width=\"50\" height=\"50\" alt=\"Logo\"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"#intro\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>-->
      </div>

      <nav id=\"nav-menu-container\">
        <ul class=\"nav-menu\">
          <li class=\"menu-active\"><a href=\"#intro\">Home</a></li>
          <li><a href=\"#about\">About Us</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#portfolio\">Portfolio</a></li>
          <li><a href=\"#team\">Team</a></li>
          <li><a href=\"#\">Web Dev</a></li>
          <li><a href=\"#services\">Mobile Dev</a></li>
          <li><a href=\"#\">Design</a></li>
          <li><a href=\"#\">Tech Bloggers</a></li>
          <li class=\"menu-has-children\"><a href=\"\">More</a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
              <li><a href=\"#\">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/freelance/freelancenavbar.htm", "");
    }
}
