<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/site/topnavbar.htm */
class __TwigTemplate_ab976da61cfa580242f2f85cf0ab068bdf29344bfa562362701d128cee5f408f extends Twig_Template
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
        echo "<div class=\"site-banner\">
     <nav class=\"navbar navbar-default navbar-inverse fixed-top topbar\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 12
        echo "assets/images/wafutech.png|theme";
        echo "\" alt=\"Logo\" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">About</a>
  </li>
    <li class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "contact")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("contact");
        echo "\">Contact</a>
  </li>
        <li class=\"active\"><a href=\"#\">Top Programmers</a></li>        
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
        <li><p class=\"navbar-text\"><a href=\"\" class=\"btn btn-info\">Register</a></p></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
      <ul id=\"login-dp\" class=\"dropdown-menu\">
        <li>
           <div class=\"row\">
              <div class=\"col-md-12\">
                Login via
                <div class=\"social-buttons\">
                  <a href=\"#\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                  <a href=\"#\" class=\"btn btn-tw\"><i class=\"fa fa-twitter\"></i> Twitter</a>
                </div>
                                or
                 <form class=\"form\" role=\"form\" method=\"post\" action=\"login\" accept-charset=\"UTF-8\" id=\"login-nav\">
                    <div class=\"form-group\">
                       <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                       <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Email address\" required>
                    </div>
                    <div class=\"form-group\">
                       <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                       <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\" required>
                                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
                    </div>
                    <div class=\"form-group\">
                       <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign in</button>
                    </div>
                    <div class=\"checkbox\">
                       <label>
                       <input type=\"checkbox\"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class=\"bottom text-center\">
                New here ? <a href=\"#\"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/topnavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  52 => 21,  47 => 19,  41 => 18,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"site-banner\">
     <nav class=\"navbar navbar-default navbar-inverse fixed-top topbar\" role=\"navigation\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"><img src=\"{{'assets/images/wafutech.png|theme'}}\" alt=\"Logo\" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"{% if( this.page.id == 'about') %}active {% endif %}\">
      <a href=\"{{ 'about'|page }}\">About</a>
  </li>
    <li class=\"{% if( this.page.id == 'contact') %}active {% endif %}\">
      <a href=\"{{ 'contact'|page }}\">Contact</a>
  </li>
        <li class=\"active\"><a href=\"#\">Top Programmers</a></li>        
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
        <li><p class=\"navbar-text\"><a href=\"\" class=\"btn btn-info\">Register</a></p></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login</b> <span class=\"caret\"></span></a>
      <ul id=\"login-dp\" class=\"dropdown-menu\">
        <li>
           <div class=\"row\">
              <div class=\"col-md-12\">
                Login via
                <div class=\"social-buttons\">
                  <a href=\"#\" class=\"btn btn-fb\"><i class=\"fa fa-facebook\"></i> Facebook</a>
                  <a href=\"#\" class=\"btn btn-tw\"><i class=\"fa fa-twitter\"></i> Twitter</a>
                </div>
                                or
                 <form class=\"form\" role=\"form\" method=\"post\" action=\"login\" accept-charset=\"UTF-8\" id=\"login-nav\">
                    <div class=\"form-group\">
                       <label class=\"sr-only\" for=\"exampleInputEmail2\">Email address</label>
                       <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail2\" placeholder=\"Email address\" required>
                    </div>
                    <div class=\"form-group\">
                       <label class=\"sr-only\" for=\"exampleInputPassword2\">Password</label>
                       <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword2\" placeholder=\"Password\" required>
                                             <div class=\"help-block text-right\"><a href=\"\">Forget the password ?</a></div>
                    </div>
                    <div class=\"form-group\">
                       <button type=\"submit\" class=\"btn btn-primary btn-block\">Sign in</button>
                    </div>
                    <div class=\"checkbox\">
                       <label>
                       <input type=\"checkbox\"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class=\"bottom text-center\">
                New here ? <a href=\"#\"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/topnavbar.htm", "");
    }
}
