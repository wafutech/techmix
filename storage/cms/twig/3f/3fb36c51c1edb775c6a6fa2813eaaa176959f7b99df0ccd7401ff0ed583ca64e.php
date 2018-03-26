<?php

/* C:\xampp\htdocs\techmix/themes/techmix/pages/blog/posts.htm */
class __TwigTemplate_f351fd87bdfb73fff723c2a4794c54ef7ff385e175fced44355b1250f4d3ca9c extends Twig_Template
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
        echo "<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 3
            echo "        <div class=\"post-preview\">
            <a href=\"";
            // line 4
            echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/post", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "slug", array())));
            echo "\">
                <h3 class=\"post-title\">
                    ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "
                </h3>
                <h3 class=\"post-subtitle\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "excerpt", array()), "html", null, true);
            echo "
                </h3>
            </a>
            <span class=\"post-meta\">Published on ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "F jS, Y"), "html", null, true);
            echo "</span> <br/>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "                <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("category", array("slug" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "slug", array())));
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
            echo "        </div>
        <hr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <h2>No posts found.</h2>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <ul class=\"pager\">
        <li class=\"next\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("posts");
        echo "\">Older Posts &rarr;</a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/blog/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  83 => 23,  76 => 21,  69 => 18,  60 => 15,  55 => 14,  51 => 13,  47 => 12,  41 => 9,  35 => 6,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
    {% for post in posts %}
        <div class=\"post-preview\">
            <a href=\"{{ 'blog/post'|page({slug: post.slug}) }}\">
                <h3 class=\"post-title\">
                    {{ post.title }}
                </h3>
                <h3 class=\"post-subtitle\">
                    {{ post.excerpt }}
                </h3>
            </a>
            <span class=\"post-meta\">Published on {{ post.published_at|date(\"F jS, Y\") }}</span> <br/>
            {% for category in post.categories %}
                <a href=\"{{ 'category'|page({slug: category.slug }) }}\">
                    <span class=\"label label-primary\">{{ category.name }}</span>
                </a>
            {% endfor %}
        </div>
        <hr>
        {% else %}
        <h2>No posts found.</h2>
    {% endfor %}

    <ul class=\"pager\">
        <li class=\"next\">
            <a href=\"{{ 'posts'|page }}\">Older Posts &rarr;</a>
        </li>
    </ul>
</div>", "C:\\xampp\\htdocs\\techmix/themes/techmix/pages/blog/posts.htm", "");
    }
}
