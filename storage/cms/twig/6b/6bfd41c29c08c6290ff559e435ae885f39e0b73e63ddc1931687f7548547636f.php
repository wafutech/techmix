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
           
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\"> 
            <li class=\"upper-links";
        // line 6
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "login")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("login");
        echo "\" class=\"links\">Login or SignUp</a>              
                <li class=\"upper-links";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\" class=\"links\">About</a>
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
        echo "\" class=\"links\">Contact</a>
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
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "store")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("store/home");
        echo "\" class=\"links\">Users</a>
              </li>
              <li class=\"upper-links";
        // line 24
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "store")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("store/home");
        echo "\" class=\"links\">Top Developers</a>
              </li>
              
                               
                <li class=\"upper-links dropdown\"><a class=\"links\" href=\"http://clashhacks.in/\">Top</a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://yazilife.com/\">Programmers/Developers</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://hacksociety.tech/\">Bloggers</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Questions</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Blogs</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Questions</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Products & Projects</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Courses</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h3 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\"><img src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wafutech.png");
        echo "\" type=\"image/png\" alt=\"LOGO\" width=\"60\" height=\"65\"></span></h3>
                <p class=\"motto\">Technology Reigns</p>
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
</div>
<!--Bottom Navigation bar-->
<nav class=\"navbar navbar-default navbar-default bottom-navbar\">
     <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\">Link 1</span>
        <span class=\"icon-bar\">Link 2</span>
        <span class=\"icon-bar\">Likn 3</span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"";
        // line 82
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "about")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 83
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("about");
        echo "\">How it Works</a>
  </li>
  <li class=\"";
        // line 85
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "questions")) {
            echo "active ";
        }
        echo "\">
              <a href=\"";
        // line 86
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("questions/questions");
        echo "\" class=\"links\">Questions</a>
              </li>

    <li class=\"";
        // line 89
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "freelance")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 90
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelance/freelance");
        echo "\">Programming Jobs</a>
  </li>
  <li class=\"";
        // line 92
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "freelance")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 93
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelance/freelance");
        echo "\">Software Store</a>
  </li>
  <li class=\"";
        // line 95
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "freelance")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 96
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelance/freelance");
        echo "\">Blogging</a>
  </li>
  <li class=\"";
        // line 98
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "freelance")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 99
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelance/freelance");
        echo "\">Become A programmer</a>
  </li>
   <li class=\"";
        // line 101
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "freelance")) {
            echo "active ";
        }
        echo "\">
      <a href=\"";
        // line 102
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelance/freelance");
        echo "\">Get Social</a>
  </li>
                
        
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
      
        <li class=\"dropdown\">
          ";
        // line 111
        if (($context["user"] ?? null)) {
            // line 112
            echo "    <p>Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "name", array()), "html", null, true);
            echo " <a a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Logout</a></p>
";
        } else {
            // line 114
            echo "<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login or Signup</b> <span class=\"caret\"></span></a>
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
                New here ? <a href=\"#\"><b>Sign Up</b></a>
              </div>
           </div>
        </li>
      </ul>
      ";
        }
        // line 152
        echo "          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </nav>";
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
        return array (  294 => 152,  254 => 114,  248 => 112,  246 => 111,  234 => 102,  228 => 101,  223 => 99,  217 => 98,  212 => 96,  206 => 95,  201 => 93,  195 => 92,  190 => 90,  184 => 89,  178 => 86,  172 => 85,  167 => 83,  161 => 82,  120 => 44,  98 => 25,  92 => 24,  87 => 22,  81 => 21,  76 => 19,  70 => 18,  64 => 15,  58 => 14,  53 => 12,  47 => 11,  42 => 9,  36 => 8,  32 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"flipkart-navbar\">
        <div class=\"container\"> 
           
        <div class=\"row row1\">
            <ul class=\"largenav pull-right\"> 
            <li class=\"upper-links{% if( this.page.id == 'login') %}active {% endif %}\">
              <a href=\"{{ 'login'|page }}\" class=\"links\">Login or SignUp</a>              
                <li class=\"upper-links{% if( this.page.id == 'about') %}active {% endif %}\">
              <a href=\"{{ 'about'|page }}\" class=\"links\">About</a>
              </li>
                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/findwork'|page }}\" class=\"links\">Contact</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'freelancer/postwork'|page }}\" class=\"links\">Post Work</a>
              </li>          

                <li class=\"upper-links{% if( this.page.id == 'posts') %}active {% endif %}\">
              <a href=\"{{ 'blog/posts'|page }}\" class=\"links\">Blog</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'store') %}active {% endif %}\">
              <a href=\"{{ 'store/home'|page }}\" class=\"links\">Users</a>
              </li>
              <li class=\"upper-links{% if( this.page.id == 'store') %}active {% endif %}\">
              <a href=\"{{ 'store/home'|page }}\" class=\"links\">Top Developers</a>
              </li>
              
                               
                <li class=\"upper-links dropdown\"><a class=\"links\" href=\"http://clashhacks.in/\">Top</a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://yazilife.com/\">Programmers/Developers</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://hacksociety.tech/\">Bloggers</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Questions</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Blogs</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Questions</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Products & Projects</a></li>
                        <li class=\"profile-li\"><a class=\"profile-links\" href=\"http://clashhacks.in/\">Courses</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"row row2\">
            <div class=\"col-sm-2\">
                <h3 style=\"margin:0px;\"><span class=\"smallnav menu\" onclick=\"openNav()\"><img src=\"{{ 'assets/images/wafutech.png' |theme }}\" type=\"image/png\" alt=\"LOGO\" width=\"60\" height=\"65\"></span></h3>
                <p class=\"motto\">Technology Reigns</p>
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
</div>
<!--Bottom Navigation bar-->
<nav class=\"navbar navbar-default navbar-default bottom-navbar\">
     <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\">Link 1</span>
        <span class=\"icon-bar\">Link 2</span>
        <span class=\"icon-bar\">Likn 3</span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"{% if( this.page.id == 'about') %}active {% endif %}\">
      <a href=\"{{ 'about'|page }}\">How it Works</a>
  </li>
  <li class=\"{% if( this.page.id == 'questions') %}active {% endif %}\">
              <a href=\"{{ 'questions/questions'|page }}\" class=\"links\">Questions</a>
              </li>

    <li class=\"{% if( this.page.id == 'freelance') %}active {% endif %}\">
      <a href=\"{{ 'freelance/freelance'|page }}\">Programming Jobs</a>
  </li>
  <li class=\"{% if( this.page.id == 'freelance') %}active {% endif %}\">
      <a href=\"{{ 'freelance/freelance'|page }}\">Software Store</a>
  </li>
  <li class=\"{% if( this.page.id == 'freelance') %}active {% endif %}\">
      <a href=\"{{ 'freelance/freelance'|page }}\">Blogging</a>
  </li>
  <li class=\"{% if( this.page.id == 'freelance') %}active {% endif %}\">
      <a href=\"{{ 'freelance/freelance'|page }}\">Become A programmer</a>
  </li>
   <li class=\"{% if( this.page.id == 'freelance') %}active {% endif %}\">
      <a href=\"{{ 'freelance/freelance'|page }}\">Get Social</a>
  </li>
                
        
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
      
        <li class=\"dropdown\">
          {% if user %}
    <p>Hello {{ user.name }} <a a data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Logout</a></p>
{% else %}
<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><b>Login or Signup</b> <span class=\"caret\"></span></a>
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
                New here ? <a href=\"#\"><b>Sign Up</b></a>
              </div>
           </div>
        </li>
      </ul>
      {% endif %}
          
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div>
  </nav>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/navbar.htm", "");
    }
}
