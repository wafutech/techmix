<?php

/* C:\xampp\htdocs\techmix/themes/techmix/partials/site/Footer.htm */
class __TwigTemplate_8e6f3338ae89bf3cd5dbd944c9ecdf930144809a5906d77eee93393dd83b3ad6 extends Twig_Template
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
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.min.js|theme", 2 => "assets/javascript/clean-blog.min.js"));
        // line 4
        echo "\"></script>
";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 6
        echo "<div class=\"container-fluid footer-top\">
        <div class=\"\">
        <hr />
        <div class=\"row\">
            <div class=\"col-md-2\">

                <a href=\"#\">Home</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">About</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Contact</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Tearms & Conditions</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Join</a>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"#\">Blog</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">Freelancing</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Store Room</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Questions</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Courses</a>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"#\">Top Programmers</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">Top Bloggers</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Top Teams</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Top Products</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Top Questions</a>
            </div>

        </div>
    </div>
        <hr>
<!--Footer bottom-->
         <div class=\"row\">
            <div class=\"col-md-12 footer-copyright\">
        <p class=\"muted credit\">&copy;  ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Wafutech &amp; Full-Stack Developer.</p>
            </div>
        </div>
        
    </div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/Footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 75,  28 => 6,  25 => 5,  22 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
      'assets/javascript/jquery.js',
    'assets/javascript/bootstrap.min.js|theme',
    'assets/javascript/clean-blog.min.js']|theme }}\"></script>
{% scripts %}
<div class=\"container-fluid footer-top\">
        <div class=\"\">
        <hr />
        <div class=\"row\">
            <div class=\"col-md-2\">

                <a href=\"#\">Home</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">About</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Contact</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Tearms & Conditions</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Join</a>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"#\">Blog</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">Freelancing</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Store Room</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Questions</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Courses</a>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"col-md-2\">
                <a href=\"#\">Top Programmers</a>
            </div>
            <div class=\"col-md-2\">
           <a href=\"#\">Top Bloggers</a>

            </div>
        <div class=\"col-md-2\">
           <a href=\"#\">Top Teams</a>

                    </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Top Products</a>
            </div>
        <div class=\"col-md-2\">
          <a href=\"#\">Top Questions</a>
            </div>

        </div>
    </div>
        <hr>
<!--Footer bottom-->
         <div class=\"row\">
            <div class=\"col-md-12 footer-copyright\">
        <p class=\"muted credit\">&copy;  {{ \"now\"|date(\"Y\") }} Wafutech &amp; Full-Stack Developer.</p>
            </div>
        </div>
        
    </div>

</body>
</html>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/Footer.htm", "");
    }
}
