<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /var/www/html/glueup/themes/glueup/partials/site/blogs-sort-home.htm */
class __TwigTemplate_01b57fd04a31280c05a8cdac96d16987d7321f201bce1383343f2d7adf091747 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 11, "for" => 12, "if" => 16);
        $filters = array("_" => 6, "escape" => 15, "media" => 19, "raw" => 35, "striptags" => 35);
        $functions = array("url" => 15, "str_limit" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['_', 'escape', 'media', 'raw', 'striptags'],
                ['url', 'str_limit']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <section class=\"section\">
                <div class=\"container\">
                \t<div class=\"row flex-row-reverse\">
\t\t                <div class=\"col-lg-8 d-flex align-items-center text-center mx-auto\">
\t\t                    <p class=\"mb-4 sentence mx-auto text-center pb-3\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get more out of Glue Up"]);
        echo "</p>
\t\t                </div>
\t\t            </div>
                <div class=\"row\">
         ";
        // line 11
        echo "         ";
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "posts", [], "any", false, false, true, 11), "slice", [0 => 0, 1 => 3], "method", false, false, true, 11);
        // line 12
        echo "         ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "                              
                                                <div class=\"col-md-4 hero mx-auto pb-2\">
                                                <a href=\"";
            // line 15
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 16), "count", [], "any", false, false, true, 16) > 0)) {
                // line 17
                echo "                                                <img class=\"media-object img-fluid rounded hideme\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 17), "last", [], "any", false, false, true, 17), "getThumb", [0 => 291, 1 => "auto"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\"/>
                                                ";
            } else {
                // line 19
                echo "                                                <img class=\"media-object img-fluid rounded hideme\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "\"/>
                                                ";
            }
            // line 21
            echo "                                                 </a>
                                                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 22));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 24), "index", [], "any", false, false, true, 24) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 24))) {
                    // line 25
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "\"><i class=\" icon-events\"></i> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 27
                    echo "                                            \t\t\t    ";
                } else {
                    // line 28
                    echo "                                            \t\t\t    ";
                }
                // line 29
                echo "                                            \t\t\t</span>
                                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 32
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                
                                                <p class=\"excerpt\">";
            // line 35
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 35), 35, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 41
            echo "                                                
                                                ";
            // line 43
            echo "                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "   
</div>
</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/blogs-sort-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 122,  195 => 47,  187 => 43,  184 => 41,  180 => 35,  170 => 32,  167 => 31,  152 => 29,  149 => 28,  146 => 27,  137 => 25,  135 => 24,  132 => 23,  115 => 22,  112 => 21,  104 => 19,  96 => 17,  94 => 16,  88 => 15,  84 => 13,  78 => 12,  75 => 11,  68 => 6,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/blogs-sort-home.htm", "");
    }
}
