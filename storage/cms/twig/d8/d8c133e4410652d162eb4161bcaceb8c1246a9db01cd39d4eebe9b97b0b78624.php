<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/questions/navbar.htm */
class __TwigTemplate_3d99a9daa8a90bc14831f4b6fd3b6f02e829d648dc06ca6e45c7e0cabf41e11e extends Twig_Template
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
        echo "<div id=\"flipkart-navbar\">
        <div class=\"container\">       
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">               
                <li class=\"upper-links";
        // line 5
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "questions")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/questions");
        echo "\" class=\"links\">Latest</a>
              </li>
                <li class=\"upper-links";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/findwork");
        echo "\" class=\"links\">Popular</a>
              </li>
              <li class=\"upper-links";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/postwork");
        echo "\" class=\"links\">Un-answered</a>
              </li> 
              <li class=\"upper-links";
        // line 14
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/ask_question");
        echo "\" class=\"links\">Ask Question</a>
              </li>         

                <li class=\"upper-links";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/posts");
        echo "\" class=\"links\">Blog</a>
              </li>
              <li class=\"upper-links";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"links\">Home</a>
              </li>                               
                
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h2 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\">TechMix Logo</span></h2>
            </div>
            <div class=\"flipkart-navbar-search smallsearch col-sm-8 col-xs-11\">
                <div class=\"row\">
                    <input class=\"flipkart-navbar-input col-xs-11\" type=\"\" placeholder=\"Search for Questions, programming jobs, Products and more\" name=\"\">
                    <button class=\"flipkart-navbar-button col-xs-1\">
                        <svg width=\"15px\" height=\"15px\">
                            <path d=\"M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 \"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div id=\"mySidenav\" class=\"sidenav\">
    <div class=\"container\" style=\"background-color: #2874f0; padding-top: 10px;\">
        <span class=\"sidenav-heading\">Home</span>
        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
    </div>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/questions/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  81 => 21,  76 => 19,  70 => 18,  64 => 15,  58 => 14,  53 => 12,  47 => 11,  42 => 9,  36 => 8,  31 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"flipkart-navbar\">
        <div class=\"container\">       
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">               
                <li class=\"upper-links{% if( this.page.id == 'questions') %}active {% endif %}\">
              <a href=\"{{ 'questions/questions'|page }}\" class=\"links\">Latest</a>
              </li>
                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/findwork'|page }}\" class=\"links\">Popular</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/postwork'|page }}\" class=\"links\">Un-answered</a>
              </li> 
              <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'questions/ask_question'|page }}\" class=\"links\">Ask Question</a>
              </li>         

                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'blog/posts'|page }}\" class=\"links\">Blog</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'home') %}active {% endif %}\">
              <a href=\"{{ 'home'|page }}\" class=\"links\">Home</a>
              </li>                               
                
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h2 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\">TechMix Logo</span></h2>
            </div>
            <div class=\"flipkart-navbar-search smallsearch col-sm-8 col-xs-11\">
                <div class=\"row\">
                    <input class=\"flipkart-navbar-input col-xs-11\" type=\"\" placeholder=\"Search for Questions, programming jobs, Products and more\" name=\"\">
                    <button class=\"flipkart-navbar-button col-xs-1\">
                        <svg width=\"15px\" height=\"15px\">
                            <path d=\"M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 \"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div id=\"mySidenav\" class=\"sidenav\">
    <div class=\"container\" style=\"background-color: #2874f0; padding-top: 10px;\">
        <span class=\"sidenav-heading\">Home</span>
        <a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">×</a>
    </div>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
    <a href=\"http://clashhacks.in/\">Link</a>
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/questions/navbar.htm", "");
    }
}
