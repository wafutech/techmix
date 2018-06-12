<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/account/signin.htm */
class __TwigTemplate_d3fe02b433ac6e938e1837dcd293e34b85d196f2609a670e317360eb36fa0a90 extends Twig_Template
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
        echo "<link href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
<div class=\"row omb_row-sm-offset-3\">
    <div data-request=\"onSignin\" class=\"col-xs-12 col-sm-6\"> 
        <h3 class=\"omb_authTitle\">Login or <a href=\"#\">Sign up</a></h3>

        <div class=\"row omb_row-sm-offset-3 omb_socialButtons\">
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-facebook\">
                    <i class=\"fa fa-facebook visible-xs\"></i>
                    <span class=\"hidden-xs\">Facebook</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-twitter\">
                    <i class=\"fa fa-twitter visible-xs\"></i>
                    <span class=\"hidden-xs\">Twitter</span>
                </a>
            </div>  
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-google\">
                    <i class=\"fa fa-google-plus visible-xs\"></i>
                    <span class=\"hidden-xs\">Google+</span>
                </a>
            </div>  
        </div>
<form data-request=\"onSignin\" class=\"omb_loginForm\"  autocomplete=\"off\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["loginAttributeLabel"] ?? null), "html", null, true);
        echo "</label>

        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Enter your ";
        // line 35
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["loginAttributeLabel"] ?? null)), "html", null, true);
        echo "\" />
        <span class=\"help-block\"></span>

    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Enter your password\" />
    </div>
    <span class=\"help-block\">Password error</span>
    <div class=\"row omb_row-sm-offset-3\">
            <div class=\"col-xs-12 col-sm-3\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" value=\"remember-me\">Remember Me
                </label>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <p class=\"omb_forgotPwd\">
                    <a href=\"#\">Forgot password?</a>
                </p>
            </div>
                       
        </div>
        
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 65
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">Sign in</button>
</form>

<form id=\"login\" data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userSigninEmail\" placeholder=\"Enter your email\">
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
    </div>

    <p align=\"right\">
        or sign in with
        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_login_links"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["link"]) {
            // line 84
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\" class='login ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
            echo "'><i class=\"fa fa-2 fa-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["name"]), "html", null, true);
            echo "\"></i></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "    </p>

    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
</form>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/account/signin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 86,  127 => 84,  123 => 83,  105 => 67,  94 => 65,  90 => 64,  58 => 35,  48 => 28,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
<div class=\"row omb_row-sm-offset-3\">
    <div data-request=\"onSignin\" class=\"col-xs-12 col-sm-6\"> 
        <h3 class=\"omb_authTitle\">Login or <a href=\"#\">Sign up</a></h3>

        <div class=\"row omb_row-sm-offset-3 omb_socialButtons\">
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-facebook\">
                    <i class=\"fa fa-facebook visible-xs\"></i>
                    <span class=\"hidden-xs\">Facebook</span>
                </a>
            </div>
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-twitter\">
                    <i class=\"fa fa-twitter visible-xs\"></i>
                    <span class=\"hidden-xs\">Twitter</span>
                </a>
            </div>  
            <div class=\"col-xs-4 col-sm-2\">
                <a href=\"#\" class=\"btn btn-lg btn-block omb_btn-google\">
                    <i class=\"fa fa-google-plus visible-xs\"></i>
                    <span class=\"hidden-xs\">Google+</span>
                </a>
            </div>  
        </div>
<form data-request=\"onSignin\" class=\"omb_loginForm\"  autocomplete=\"off\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">{{ loginAttributeLabel }}</label>

        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Enter your {{ loginAttributeLabel|lower }}\" />
        <span class=\"help-block\"></span>

    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Enter your password\" />
    </div>
    <span class=\"help-block\">Password error</span>
    <div class=\"row omb_row-sm-offset-3\">
            <div class=\"col-xs-12 col-sm-3\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" value=\"remember-me\">Remember Me
                </label>
            </div>
            <div class=\"col-xs-12 col-sm-3\">
                <p class=\"omb_forgotPwd\">
                    <a href=\"#\">Forgot password?</a>
                </p>
            </div>
                       
        </div>
        
{% for name, link in social_login_links %}
<a href=\"{{ link }}\">{{ name }}</a>
{% endfor %}
    <button type=\"submit\" class=\"btn btn-lg btn-info btn-block\">Sign in</button>
</form>

<form id=\"login\" data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userSigninEmail\" placeholder=\"Enter your email\">
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Password</label>
        <input name=\"password\" type=\"password\" class=\"form-control\" id=\"userSigninPassword\" placeholder=\"Enter your password\">
    </div>

    <p align=\"right\">
        or sign in with
        {% for name, link in social_login_links %}
            <a href=\"{{ link }}\" class='login {{ name|lower }}'><i class=\"fa fa-2 fa-{{ name|lower }}\"></i></a>
        {% endfor %}
    </p>

    <button type=\"submit\" class=\"btn btn-default\">Sign in</button>
</form>
    </div>

</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/account/signin.htm", "");
    }
}
