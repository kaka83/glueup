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

/* /var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm */
class __TwigTemplate_75967396306864d3b112e124c51ec761332b85d8dbc4d4bf2de55068976c2af3 extends \Twig\Template
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
        $tags = array("for" => 7, "if" => 11);
        $filters = array("slice" => 7, "escape" => 10, "media" => 14, "raw" => 30, "striptags" => 30, "_" => 37);
        $functions = array("url" => 10, "str_limit" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['slice', 'escape', 'media', 'raw', 'striptags', '_'],
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
        echo "    <section class=\"section py-0\">
                <div class=\"container\">
                <div class=\"row\">
         ";
        // line 6
        echo "       ";
        // line 7
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["filteredPosts"] ?? null), 0, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 10
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 11
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 11), "count", [], "any", false, false, true, 11) > 0)) {
                // line 12
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 12), "last", [], "any", false, false, true, 12), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 14
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 16
            echo "                                                 </a>
                                                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 17));
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
                // line 18
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 19), "index", [], "any", false, false, true, 19) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 19))) {
                    // line 20
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "\"><i class=\" icon-content\"></i> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 22
                    echo "                                            \t\t\t    ";
                } else {
                    // line 23
                    echo "                                            \t\t\t    ";
                }
                // line 24
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
            // line 26
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 27
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                
                                                <p class=\"excerpt\">";
            // line 30
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 30), 30, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 36
            echo "                                                
                                                <a href=\"";
            // line 37
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\" class=\"read-more d-flex\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Read More"]);
            echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["filteredPosts2"] ?? null), 0, 1));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 46
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 47), "count", [], "any", false, false, true, 47) > 0)) {
                // line 48
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 48), "last", [], "any", false, false, true, 48), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 50
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 52
            echo "                                                 </a>
                                                 ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 53));
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
                // line 54
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 55
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 55), "index", [], "any", false, false, true, 55) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 55))) {
                    // line 56
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "\"><i class=\"icon-content\"></i> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 58
                    echo "                                            \t\t\t    ";
                } else {
                    // line 59
                    echo "                                            \t\t\t    ";
                }
                // line 60
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
            // line 62
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 63
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 65
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 65), 65, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 71
            echo "                                                
                                                <a href=\"";
            // line 72
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "\" class=\"read-more d-flex\">Download <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filteredPosts3"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 79
            echo "                              
                                                <div class=\"col-md-4 hero ml-auto pb-2\">
                                                <a href=\"";
            // line 81
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 82), "count", [], "any", false, false, true, 82) > 0)) {
                // line 83
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 83), "last", [], "any", false, false, true, 83), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 85
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 87
            echo "                                                 </a>
                                                 ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 88));
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
                // line 89
                echo "                                                        <span class=\"sm-grey-text text-capitalize mt-1 d-flex category-badge\">    
                                                            ";
                // line 90
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 90), "index", [], "any", false, false, true, 90) == twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 90))) {
                    // line 91
                    echo "                                                            <a href=\"";
                    echo url("/blog/category/");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                    echo "\"><i class=\"icon-content\"></i> ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                    echo "</a>
                                            \t\t\t    ";
                    // line 93
                    echo "                                            \t\t\t    ";
                } else {
                    // line 94
                    echo "                                            \t\t\t    ";
                }
                // line 95
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
            // line 97
            echo "                                                <h5 class=\"my-2\">
                                                    <a href=\"";
            // line 98
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 100
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 100), 100, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 106
            echo "                                                <a href=\"";
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "\" class=\"read-more d-flex\">Download <i class=\"read-more-icon icon-arrow\"></i></a>
                                                </div>
                                                
                      
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "</div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 112,  430 => 111,  417 => 106,  413 => 100,  404 => 98,  401 => 97,  386 => 95,  383 => 94,  380 => 93,  371 => 91,  369 => 90,  366 => 89,  349 => 88,  346 => 87,  340 => 85,  334 => 83,  332 => 82,  326 => 81,  322 => 79,  316 => 78,  310 => 77,  298 => 72,  295 => 71,  291 => 65,  282 => 63,  279 => 62,  264 => 60,  261 => 59,  258 => 58,  249 => 56,  247 => 55,  244 => 54,  227 => 53,  224 => 52,  218 => 50,  212 => 48,  210 => 47,  204 => 46,  200 => 44,  194 => 43,  188 => 42,  174 => 37,  171 => 36,  167 => 30,  157 => 27,  154 => 26,  139 => 24,  136 => 23,  133 => 22,  124 => 20,  122 => 19,  119 => 18,  102 => 17,  99 => 16,  93 => 14,  87 => 12,  85 => 11,  79 => 10,  75 => 8,  69 => 7,  67 => 6,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/industry/industry-blog.htm", "");
    }
}
