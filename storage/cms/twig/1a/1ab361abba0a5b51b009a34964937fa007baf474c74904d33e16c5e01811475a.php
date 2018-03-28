<?php

/* C:\xampp\htdocs\techmix/themes/techmix/layouts/freelance.htm */
class __TwigTemplate_e6a4f618dae31ac5ad2daf350d085fed9cb6a7e243647199e4a32e1e9ec569ee extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>TechMix - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"Wafutech\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"TechMix\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/wafutech.png");
        echo "\">
       <link href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/font-awesome.css.map");
        echo "\" rel=\"stylesheet\">
               <link href=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/social-login.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/utilities/contactform.css");
        echo "\" rel=\"stylesheet\">
        <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/animate/animate.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\" ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/ionicons/css/ionicons.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\" ";
        // line 29
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/owlcarousel/assets/owl.carousel.min.css");
        echo "\" rel=\"stylesheet\">
  <link href=\" ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet");
        echo "\">

  <!-- Main Stylesheet File -->
  <link href=\" ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/css/style.css\" rel=\"stylesheet");
        echo "\">


        ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 37
        echo "    </head>
    <body style=\"margin: 0px;\">

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "        </header>
<br><br><br><br>
        ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("freelance/freelancenavbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "
       

        <!-- Content -->
        <section id=\"layout-content home-content\">
            ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
        ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 60
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 61
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 62
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\" ";
        // line 63
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/jquery/jquery-migrate.min.js");
        echo "\"></script>
  <script src=\"";
        // line 64
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
  <script src=\" ";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/easing/easing.min.js");
        echo "\"></script>
  <script src=\"";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/superfish/hoverIntent.js");
        echo "\"></script>
  <script src=\" ";
        // line 67
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/superfish/superfish.min.js");
        echo "\"></script>
  <script src=\" ";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/wow/wow.min.js");
        echo "\"></script>
  <script src=\"";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/waypoints/waypoints.min.js");
        echo "\"></script>
  <script src=\"";
        // line 70
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/counterup/counterup.min.js");
        echo "\"></script>
  <script src=\"";
        // line 71
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/owlcarousel/owl.carousel.min.js");
        echo "\"></script>
  <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/isotope/isotope.pkgd.min.js");
        echo "\"></script>
  <script src=\"";
        // line 73
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/lightbox/js/lightbox.min.js");
        echo "\"></script>
  <script src=\"";
        // line 74
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/lib/touchSwipe/jquery.touchSwipe.min.js");
        echo "\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"";
        // line 76
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/contactform/contactform.js");
        echo "\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"";
        // line 79
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/freelance/js/main.js");
        echo "\"></script>

        ";
        // line 81
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 82
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 83
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/layouts/freelance.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 83,  232 => 82,  225 => 81,  220 => 79,  214 => 76,  209 => 74,  205 => 73,  201 => 72,  197 => 71,  193 => 70,  189 => 69,  185 => 68,  181 => 67,  177 => 66,  173 => 65,  169 => 64,  165 => 63,  161 => 62,  157 => 61,  153 => 60,  148 => 57,  144 => 56,  138 => 52,  136 => 51,  129 => 46,  125 => 45,  121 => 43,  117 => 42,  110 => 37,  107 => 36,  101 => 33,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  68 => 18,  64 => 17,  60 => 16,  56 => 15,  52 => 14,  48 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>TechMix - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"Wafutech\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"TechMix\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/wafutech.png'|theme }}\">
       <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/font-awesome.css.map'|theme }}\" rel=\"stylesheet\">
               <link href=\"{{ 'assets/css/social-login.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/utilities/contactform.css'|theme }}\" rel=\"stylesheet\">
        <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700\" rel=\"stylesheet\">

  <!-- Bootstrap CSS File -->
  <link href=\"lib/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">

  <!-- Libraries CSS Files -->
  <link href=\"{{ 'assets/freelance/lib/font-awesome/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/freelance/lib/animate/animate.min.css'|theme}}\" rel=\"stylesheet\">
  <link href=\" {{'assets/freelance/lib/ionicons/css/ionicons.min.css'|theme}}\" rel=\"stylesheet\">
  <link href=\" {{ 'assets/freelance/lib/owlcarousel/assets/owl.carousel.min.css'|theme}}\" rel=\"stylesheet\">
  <link href=\" {{'assets/freelance/lib/lightbox/css/lightbox.min.css\" rel=\"stylesheet'|theme}}\">

  <!-- Main Stylesheet File -->
  <link href=\" {{ 'assets/freelance/css/style.css\" rel=\"stylesheet'|theme}}\">


        {% styles %}
    </head>
    <body style=\"margin: 0px;\">

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>
<br><br><br><br>
        {% partial 'freelance/freelancenavbar' %}

       

        <!-- Content -->
        <section id=\"layout-content home-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ 'assets/javascript/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        <script src=\" {{ 'assets/freelance/lib/jquery/jquery-migrate.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/bootstrap/js/bootstrap.bundle.min.js'|theme}}\"></script>
  <script src=\" {{ 'assets/freelance/lib/easing/easing.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/superfish/hoverIntent.js'|theme}}\"></script>
  <script src=\" {{ 'assets/freelance/lib/superfish/superfish.min.js'|theme}}\"></script>
  <script src=\" {{ 'assets/freelance/lib/wow/wow.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/waypoints/waypoints.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/counterup/counterup.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/owlcarousel/owl.carousel.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/isotope/isotope.pkgd.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/lightbox/js/lightbox.min.js'|theme}}\"></script>
  <script src=\"{{ 'assets/freelance/lib/touchSwipe/jquery.touchSwipe.min.js'|theme}}\"></script>
  <!-- Contact Form JavaScript File -->
  <script src=\"{{ 'assets/freelance/contactform/contactform.js'|theme}}\"></script>

  <!-- Template Main Javascript File -->
  <script src=\"{{ 'assets/freelance/js/main.js'|theme}}\"></script>

        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\techmix/themes/techmix/layouts/freelance.htm", "");
    }
}
