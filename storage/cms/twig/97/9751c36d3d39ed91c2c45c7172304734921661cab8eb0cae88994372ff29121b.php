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

/* /var/www/html/glueup/themes/glueup/pages/blog/category.htm */
class __TwigTemplate_32e77a37dee381a875b56f7733ac43066f5885640bd55581d7f1cf84f1784979 extends \Twig\Template
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
        $tags = array("component" => 5, "set" => 10, "for" => 11, "if" => 16);
        $filters = array("escape" => 15, "media" => 19, "raw" => 25, "striptags" => 25, "page" => 41);
        $functions = array("str_limit" => 25, "range" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'set', 'for', 'if'],
                ['escape', 'media', 'raw', 'striptags', 'page'],
                ['str_limit', 'range']
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
        // line 1
        echo "<section class=\"section\">
<div class=\"container\">
            <div class=\"row\">
            \t<div class=\"col-md-3\">
               \t\t";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "            \t</div>
                <div class=\"col-md-9 align-self-center\">
                ";
        // line 9
        echo "                \t<div class=\"row\">
                ";
        // line 10
        $context["featured"] = twig_get_attribute($this->env, $this->source, ($context["featured"] ?? null), "posts", [], "any", false, false, true, 10);
        // line 11
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
\t           
\t                                                
\t                    <div class=\"col-md-4 hero pb-2\">
\t                     <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\" class=\"\">
\t                        ";
            // line 16
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 16), "count", [], "any", false, false, true, 16) > 0)) {
                // line 17
                echo "\t                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 17), "last", [], "any", false, false, true, 17), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "\" />
\t                        ";
            } else {
                // line 19
                echo "\t                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
\t                        ";
            }
            // line 21
            echo "\t                         </a>
\t                     <h5 class=\"pt-2\">
\t                         <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</a>
\t                     </h5>
\t                     <p class=\"excerpt\">";
            // line 25
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 25), 25, $this->source)), 150]);
            echo "</p>
\t                     ";
            // line 31
            echo "\t                     </div>
\t             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t             </div>
\t             
";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 35) > 1)) {
            // line 36
            echo "<div class=\"row justify-content-center mt-5\">
    <div class=\"col-lg-6 text-center\">
        <nav class=\"navigation pagination d-inline-block\">
            <div class=\"nav-links\">
                ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 40) > 1)) {
                // line 41
                echo "                <a class=\"prev page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 41), "baseFileName", [], "any", false, false, true, 41), 41, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 41) - 1)]);
                echo "\">Prev</a>
                ";
            }
            // line 43
            echo "
                ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 44)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "                <a class=\"page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 45), "baseFileName", [], "any", false, false, true, 45), 45, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 45, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 48) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 48))) {
                // line 49
                echo "                <a class=\"next page-numbers\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "baseFileName", [], "any", false, false, true, 49), 49, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 49) + 1)]);
                echo "\">Next</a>
                ";
            }
            // line 51
            echo "            </div>
        </nav>
    </div>
</div>
";
        }
        // line 56
        echo "            </div>
            
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  180 => 51,  174 => 49,  172 => 48,  169 => 47,  158 => 45,  154 => 44,  151 => 43,  145 => 41,  143 => 40,  137 => 36,  135 => 35,  131 => 33,  124 => 31,  120 => 25,  113 => 23,  109 => 21,  103 => 19,  97 => 17,  95 => 16,  91 => 15,  81 => 11,  79 => 10,  76 => 9,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/blog/category.htm", "");
    }
}
