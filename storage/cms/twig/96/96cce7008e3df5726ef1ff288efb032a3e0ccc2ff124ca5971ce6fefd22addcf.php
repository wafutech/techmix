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
        echo "<div class=\"footer-top\">
\t<script src=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/javascript/bootstrap.min.js", 2 => "assets/javascript/clean-blog.min.js"));
        // line 5
        echo "\"></script>
";
        // line 6
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 7
        echo "</body>
</html>
    <div class=\"container footer-top\">
    \t<div class=\"\">
        <hr />
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Home</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">About</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Contact</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Tearms & Conditions</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Join</a>
        \t</div>

        </div>
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Blog</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">Freelancing</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Store Room</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Questions</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Courses</a>
        \t</div>

        </div>
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Top Programmers</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">Top Bloggers</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Top Teams</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Top Products</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Top Questions</a>
        \t</div>

        </div>
    </div>
        <hr>
<!--Footer bottom-->
         <div class=\"row\">
        \t<div class=\"col-md-12 footer-copyright\">
        <p class=\"muted credit\">&copy;  ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Wafutech &amp; Full-Stack Developer.</p>
        \t</div>
        </div>
        
    </div>
</div>";
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
        return array (  102 => 77,  30 => 7,  27 => 6,  24 => 5,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"footer-top\">
\t<script src=\"{{ [
      'assets/javascript/jquery.js',
    'assets/javascript/bootstrap.min.js',
    'assets/javascript/clean-blog.min.js']|theme }}\"></script>
{% scripts %}
</body>
</html>
    <div class=\"container footer-top\">
    \t<div class=\"\">
        <hr />
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Home</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">About</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Contact</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Tearms & Conditions</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Join</a>
        \t</div>

        </div>
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Blog</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">Freelancing</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Store Room</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Questions</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Courses</a>
        \t</div>

        </div>
        <div class=\"row\">
        \t<div class=\"col-md-2\">
        \t\t<a href=\"#\">Top Programmers</a>
        \t</div>
        \t<div class=\"col-md-2\">
           <a href=\"#\">Top Bloggers</a>

        \t</div>
\t\t<div class=\"col-md-2\">
\t\t   <a href=\"#\">Top Teams</a>

\t\t        \t</div>
\t\t<div class=\"col-md-2\">
\t\t  <a href=\"#\">Top Products</a>
        \t</div>
        <div class=\"col-md-2\">
\t\t  <a href=\"#\">Top Questions</a>
        \t</div>

        </div>
    </div>
        <hr>
<!--Footer bottom-->
         <div class=\"row\">
        \t<div class=\"col-md-12 footer-copyright\">
        <p class=\"muted credit\">&copy;  {{ \"now\"|date(\"Y\") }} Wafutech &amp; Full-Stack Developer.</p>
        \t</div>
        </div>
        
    </div>
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/partials/site/Footer.htm", "");
    }
}
