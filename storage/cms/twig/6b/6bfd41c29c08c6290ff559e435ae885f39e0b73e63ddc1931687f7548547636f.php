<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/site/navbar.htm */
class __TwigTemplate_d2dea208919f939895a8ebeb2f337835df5df2706e886d4ce248d3c5cc12d7ae extends Twig_Template
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
        <div class=\"row\">  
          <div class=\"col-md-12\">
            <p>Top Navigation Bar</p>
          </div>
        </div>    
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">               
                <li class=\"upper-links";
        // line 10
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "questions")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/questions");
        echo "\" class=\"links\">Questions</a>
              </li>
                <li class=\"upper-links";
        // line 13
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/findwork");
        echo "\" class=\"links\">Find Work</a>
              </li>
              <li class=\"upper-links";
        // line 16
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/postwork");
        echo "\" class=\"links\">Post Work</a>
              </li>          

                <li class=\"upper-links";
        // line 20
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/posts");
        echo "\" class=\"links\">Blog</a>
              </li>
              <li class=\"upper-links";
        // line 23
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "store")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 24
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
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  75 => 23,  70 => 21,  64 => 20,  58 => 17,  52 => 16,  47 => 14,  41 => 13,  36 => 11,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"flipkart-navbar\">
        <div class=\"container\"> 
        <div class=\"row\">  
          <div class=\"col-md-12\">
            <p>Top Navigation Bar</p>
          </div>
        </div>    
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\">               
                <li class=\"upper-links{% if( this.page.id == 'questions') %}active {% endif %}\">
              <a href=\"{{ 'questions/questions'|page }}\" class=\"links\">Questions</a>
              </li>
                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/findwork'|page }}\" class=\"links\">Find Work</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/postwork'|page }}\" class=\"links\">Post Work</a>
              </li>          

                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'blog/posts'|page }}\" class=\"links\">Blog</a>
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
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/navbar.htm", "");
    }
}
