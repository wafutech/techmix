<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/blog/post.htm */
class __TwigTemplate_261149ccd5d77630e1422053b6ba8b5bb0db62098f799bd56320d3a45d6e9955 extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"
            ";
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "isEmpty", array(), "method")) {
            // line 3
            echo "                background-image: url('";
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("/assets/images/post-sample-image.jpg");
            echo "')
            ";
        } else {
            // line 5
            echo "                background-image: url('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "first", array(), "method"), "getPath", array(), "method"), "html", null, true);
            echo "')
            ";
        }
        // line 6
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"\">
                    <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
                    <span class=\"meta\">Published on ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "F jS, Y"), "html", null, true);
        echo "</span><br/>
                    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                    <a href=\"";
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/category", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array())));
            echo "\">
                        <span class=\"label label-primary\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</span>
                    </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10\">
               <p> ";
        // line 28
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content", array());
        echo "</p>
            </div>
            <div class=\"col-md-2\">
                &nbsp;
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-12\">
        \t\t<div class=\"well\">
    <div class=\"container\">
        ";
        // line 38
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("share_buttons.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 39
        echo "
</div>
        \t</div>
        </div>
        <div class=\"row\">
            <hr/>
            <div class=\" col-md-12\">
\t\t\t ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/comments"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "         
    </div>
        </div>
    </div>
</div>
</article>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  98 => 39,  94 => 38,  81 => 28,  69 => 18,  60 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  36 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"intro-header\" style=\"
            {% if post.featured_images.isEmpty() %}
                background-image: url('{{ \"/assets/images/post-sample-image.jpg\"|theme }}')
            {% else %}
                background-image: url('{{ post.featured_images.first().getPath() }}')
            {% endif %}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"\">
                    <h1>{{ post.title }}</h1>
                    <span class=\"meta\">Published on {{ post.published_at|date(\"F jS, Y\") }}</span><br/>
                    {% for category in post.categories %}
                    <a href=\"{{ 'blog/category'|page({slug: category.slug }) }}\">
                        <span class=\"label label-primary\">{{ category.name }}</span>
                    </a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</header>

<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-10\">
               <p> {{ post.content|raw }}</p>
            </div>
            <div class=\"col-md-2\">
                &nbsp;
            </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-12\">
        \t\t<div class=\"well\">
    <div class=\"container\">
        {% content \"share_buttons.htm\" %}

</div>
        \t</div>
        </div>
        <div class=\"row\">
            <hr/>
            <div class=\" col-md-12\">
\t\t\t {% partial 'site/comments' %}         
    </div>
        </div>
    </div>
</div>
</article>", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/blog/post.htm", "");
    }
}
