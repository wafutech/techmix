<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/questions/ask_question.htm */
class __TwigTemplate_f12e09a1bfc4ec9c46bfabe793dbdda9c4a0dbcee6b40fd4f74c2ac959565293 extends Twig_Template
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
        echo "<div class=\"row\">
\t<div class=\"col-md-1\">
\t\t<!--Blnak column-->
\t</div>
\t<div class=\"col-md-8\">
\t\t<!--Input form-->
\t\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t<div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Ask Question</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onPostQuestion\" data-request-update=\"questions/showquestion: '#question-preview'\">
            \t<div class=\"row\">
            \t\t<div class=\"col-md-2\">
            \t\t\t<h4>Title</h4>
            \t\t</div>
            \t\t<div class=\"col-md-10\">
            \t\t\t<input type=\"text\" name=\"question\" class=\"form-control\" id=\"question\">
            \t\t</div>
            \t</div>
            \t<hr>
            \t<br><br>

            \t<div class=\"row\">
            \t\t<div class=\"col-md-2\">
            \t\t\t<h4>Question Details</h4>
            \t\t</div>
            \t\t<div class=\"col-md-10\">
            \t\t\t<textarea class=\"form-control\" cols=\"20\" rows=\"15\" name=\"question_detail\"></textarea>
            \t\t</div>

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-md-12\" id=\"question-preview\">
            \t\t\t";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("questions/showquestion"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "            \t\t\t</div>
            \t\t</div>
            \t</div>
            \t               
                
                <button type=\"submit\" class=\"btn btn btn-primary pull-right\" data-attach-loading>Post Your Answer</button>
            </form>
        </div>
       
    </div>
\t\t";
        // line 47
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 48
        echo "\t</div>
\t</div>

\t</div>

\t<div class=\"col-md-3\">
\t\t<p>Help and updates</p>
\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/questions/ask_question.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 48,  72 => 47,  60 => 37,  56 => 36,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
\t<div class=\"col-md-1\">
\t\t<!--Blnak column-->
\t</div>
\t<div class=\"col-md-8\">
\t\t<!--Input form-->
\t\t<div class=\"row\">
\t<div class=\"col-md-12\">
\t<div class=\"panel panel-warning\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Ask Question</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onPostQuestion\" data-request-update=\"questions/showquestion: '#question-preview'\">
            \t<div class=\"row\">
            \t\t<div class=\"col-md-2\">
            \t\t\t<h4>Title</h4>
            \t\t</div>
            \t\t<div class=\"col-md-10\">
            \t\t\t<input type=\"text\" name=\"question\" class=\"form-control\" id=\"question\">
            \t\t</div>
            \t</div>
            \t<hr>
            \t<br><br>

            \t<div class=\"row\">
            \t\t<div class=\"col-md-2\">
            \t\t\t<h4>Question Details</h4>
            \t\t</div>
            \t\t<div class=\"col-md-10\">
            \t\t\t<textarea class=\"form-control\" cols=\"20\" rows=\"15\" name=\"question_detail\"></textarea>
            \t\t</div>

            \t\t<div class=\"row\">
            \t\t\t<div class=\"col-md-12\" id=\"question-preview\">
            \t\t\t{% partial 'questions/showquestion' %}
            \t\t\t</div>
            \t\t</div>
            \t</div>
            \t               
                
                <button type=\"submit\" class=\"btn btn btn-primary pull-right\" data-attach-loading>Post Your Answer</button>
            </form>
        </div>
       
    </div>
\t\t{% component 'session' %}
\t</div>
\t</div>

\t</div>

\t<div class=\"col-md-3\">
\t\t<p>Help and updates</p>
\t</div>
\t</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/questions/ask_question.htm", "");
    }
}
