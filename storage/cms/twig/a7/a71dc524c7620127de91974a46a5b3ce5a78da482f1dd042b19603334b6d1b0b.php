<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/timeline/timeline.htm */
class __TwigTemplate_bfdcc263c675dc13eb408f2d80dff9e13812821a8098f23e0f26917ee700f594 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "<div class=\"tab-content\">
\t<!--TIMELINE UPDATES TAB-->
\t<div class=\"tab-pane fade in active\" id=\"tab1default\">
\t\t<div class=\"row\">
\t<div class=\"col-sm-2 timeline-left-pane float-left bg-info\">
\t\t
\t\t<div class=\"page-header\">
        <h4>User name and Image</h4>
    </div>
\t<hr>
\t<h4>Teams</h4>
\t<ul>
\t<li class=\"list-group-item\">Team 1</li>
  <li class=\"list-group-item\">Team 2</li>
  <li class=\"list-group-item\">Team 3</li>
  <li class=\"list-group-item\">Team 4</li>
\t</ul>
\t<p><span class=\"badge badge-primary\">Create New Team</span></p>

\t<h4>Your Projects</h4>
\t<ul>
\t\t<li>Project 1</li>
\t\t<li>Project 2</li>
\t\t<li>Project 3</li>
\t\t<a href=\"#\">More</a>
\t</div>
\t<div class=\"col-sm-6 \">
\t\t<div class=\"mx-auto\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"panel-title\">

\t<ul class=\"nav nav-tabs nav-justified\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#\">Make Post</a>
  </li>
    <li class=\"nav-item ";
        // line 37
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "id", array()) == "posts")) {
            echo "active ";
        }
        echo "\">
    <a class=\"nav-link\" href=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("freelancer/findwork");
        echo "\"> Photo/Video</a>
  </li>
  
  </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p><form class=\"form-inline\" data-request=\"onPost\" data-request-update=\"timeline/showpost: '#timeline-post'\">
\t\t\t\t<p><textarea class=\"form-control\" cols=\"40\" rows=\"5\" name=\"post\" placeholder=\"Share Something\"></textarea></p>
\t\t\t\t<button type=\"submit\" class=\"btn btn btn-success float-right\" data-attach-loading>Post </button>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t<div class=\"col-sm-4 timeline-right-pane\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 featured\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t<h3>Featured</h3>
\t\t\t</div>
\t\t\t<h4>Developers</h4>
\t\t\t<p>developer avatar, name and link to profile</p>
\t\t\t<h4>Questions</h4>
\t\t\t<p>List of top 5 questions</p>
\t\t\t<h4>Articles</h4>
\t\t\t<p>List of top five questions</p>
\t\t\t<h4>Teams</h4>
\t\t\t<p>List of top 5 teams</p>

\t\t\t<div class=\"jumbotron\">
\t\t\t\t<h2>Advert</h2>
\t\t\t\t<p>Some advert content goes here</p>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"col-sm-4 developers-online\">
\t\t\t\t<aside>List of users online whom you follow or follows you. You can get into chat room.</aside>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

\t</div><!--CLOSE TIMELINE TAB-->

\t<!--ARTICLES TAB-->
\t<div class=\"tab-pane fade\" id=\"tab2default\">
\t\tLatest Articles

\t</div>

\t<!--JOBS TAB-->
\t<div class=\"tab-pane fade\" id=\"tab3default\">
\t\tJobs
\t</div>

\t</div><!--CLOSE TAB CONTENT-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/timeline/timeline.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 38,  60 => 37,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}<div class=\"tab-content\">
\t<!--TIMELINE UPDATES TAB-->
\t<div class=\"tab-pane fade in active\" id=\"tab1default\">
\t\t<div class=\"row\">
\t<div class=\"col-sm-2 timeline-left-pane float-left bg-info\">
\t\t
\t\t<div class=\"page-header\">
        <h4>User name and Image</h4>
    </div>
\t<hr>
\t<h4>Teams</h4>
\t<ul>
\t<li class=\"list-group-item\">Team 1</li>
  <li class=\"list-group-item\">Team 2</li>
  <li class=\"list-group-item\">Team 3</li>
  <li class=\"list-group-item\">Team 4</li>
\t</ul>
\t<p><span class=\"badge badge-primary\">Create New Team</span></p>

\t<h4>Your Projects</h4>
\t<ul>
\t\t<li>Project 1</li>
\t\t<li>Project 2</li>
\t\t<li>Project 3</li>
\t\t<a href=\"#\">More</a>
\t</div>
\t<div class=\"col-sm-6 \">
\t\t<div class=\"mx-auto\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<div class=\"panel-title\">

\t<ul class=\"nav nav-tabs nav-justified\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"#\">Make Post</a>
  </li>
    <li class=\"nav-item {% if( this.page.id == 'posts') %}active {% endif %}\">
    <a class=\"nav-link\" href=\"{{ 'freelancer/findwork'|page }}\"> Photo/Video</a>
  </li>
  
  </ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p><form class=\"form-inline\" data-request=\"onPost\" data-request-update=\"timeline/showpost: '#timeline-post'\">
\t\t\t\t<p><textarea class=\"form-control\" cols=\"40\" rows=\"5\" name=\"post\" placeholder=\"Share Something\"></textarea></p>
\t\t\t\t<button type=\"submit\" class=\"btn btn btn-success float-right\" data-attach-loading>Post </button>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>
\t</div>

\t<div class=\"col-sm-4 timeline-right-pane\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-8 featured\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t<h3>Featured</h3>
\t\t\t</div>
\t\t\t<h4>Developers</h4>
\t\t\t<p>developer avatar, name and link to profile</p>
\t\t\t<h4>Questions</h4>
\t\t\t<p>List of top 5 questions</p>
\t\t\t<h4>Articles</h4>
\t\t\t<p>List of top five questions</p>
\t\t\t<h4>Teams</h4>
\t\t\t<p>List of top 5 teams</p>

\t\t\t<div class=\"jumbotron\">
\t\t\t\t<h2>Advert</h2>
\t\t\t\t<p>Some advert content goes here</p>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"col-sm-4 developers-online\">
\t\t\t\t<aside>List of users online whom you follow or follows you. You can get into chat room.</aside>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

\t</div><!--CLOSE TIMELINE TAB-->

\t<!--ARTICLES TAB-->
\t<div class=\"tab-pane fade\" id=\"tab2default\">
\t\tLatest Articles

\t</div>

\t<!--JOBS TAB-->
\t<div class=\"tab-pane fade\" id=\"tab3default\">
\t\tJobs
\t</div>

\t</div><!--CLOSE TAB CONTENT-->", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/timeline/timeline.htm", "");
    }
}
