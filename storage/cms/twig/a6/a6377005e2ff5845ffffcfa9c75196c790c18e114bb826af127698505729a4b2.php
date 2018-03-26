<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/blog/navBar.htm */
class __TwigTemplate_10f7ffe32d084e71a3fac1d8037ef8edef3e78806b46f05a302a60f3ca49d3cc extends Twig_Template
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
        echo "<div id=\"flipkart-navbar-blog\">
        <div class=\"container\">       
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">  
            <li class=\"upper-links";
        // line 5
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\" class=\"links\">Home</a>
              </li>             
                <li class=\"upper-links";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/questions");
        echo "\" class=\"links\">Questions</a>
              </li>
                <li class=\"upper-links";
        // line 11
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/findwork");
        echo "\" class=\"links\">Find Work</a>
              </li>
              <li class=\"upper-links";
        // line 14
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/postwork");
        echo "\" class=\"links\">Post Work</a>
              </li>          

                
              <li class=\"upper-links";
        // line 19
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "store")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("store/home");
        echo "\" class=\"links\">Store Room</a>
              </li>
                               
                <li class=\"upper-links dropdown\"><a class=\"links\" href=\"http://clashhacks.in/\">More</a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://yazilife.com/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://hacksociety.tech/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h2 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\">☰ Brand</span></h2>
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
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/blog/navBar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 20,  71 => 19,  64 => 15,  58 => 14,  53 => 12,  47 => 11,  42 => 9,  36 => 8,  31 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"flipkart-navbar-blog\">
        <div class=\"container\">       
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">  
            <li class=\"upper-links{% if( this.page.id == 'home') %}active {% endif %}\">
              <a href=\"{{ 'home'|page }}\" class=\"links\">Home</a>
              </li>             
                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'questions/questions'|page }}\" class=\"links\">Questions</a>
              </li>
                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/findwork'|page }}\" class=\"links\">Find Work</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/postwork'|page }}\" class=\"links\">Post Work</a>
              </li>          

                
              <li class=\"upper-links{% if( this.page.id == 'store') %}active {% endif %}\">
              <a href=\"{{ 'store/home'|page }}\" class=\"links\">Store Room</a>
              </li>
                               
                <li class=\"upper-links dropdown\"><a class=\"links\" href=\"http://clashhacks.in/\">More</a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://yazilife.com/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://hacksociety.tech/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h2 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\">☰ Brand</span></h2>
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
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/blog/navBar.htm", "");
    }
}
