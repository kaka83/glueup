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

/* /var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm */
class __TwigTemplate_1900189db9ef74866f698cc5ffbf39083ee70931e4fa925ac31499ad17c309eb extends \Twig\Template
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
        $tags = array("if" => 2);
        $filters = array("escape" => 9, "date" => 21, "default" => 36, "media" => 36, "_" => 57);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date', 'default', 'media', '_'],
                []
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
        echo "<div class=\"generic \" id=\"generic\">
        ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 2)) {
            // line 3
            echo "        
        <div class=\"container\">
            <div class=\"row\">
            \t<div class=\"col-md-8 pt-3 mx-auto text-left\">
            \t\t<div class=\"row\">\t
            \t\t    <div class=\"col-md-12 pt-3 mx-auto text-left\">
            \t\t\t\t<h1 class=\"pt-2 text-left\">";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</h1>
            \t\t\t\t<p class=\"tagline ml-0\">";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</p>
            \t\t\t</div>
            \t    </div>
                 \t<div class=\"row\">
            \t\t    <div class=\"col-md-8 pt-1 text-left\">
                \t\t\t<div class=\"d-flex\">
                    \t\t\t\t    <img class=\"author-avatar mr-2\" data-src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 16), "avatar", [], "any", false, false, true, 16), "file_name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 16), "avatar", [], "any", false, false, true, 16), "getThumb", [0 => 120, 1 => "auto"], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 16), "first_name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 16), "last_name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\"/>
                        \t\t\t\t<div class=\"d-flex py-3 align-items-middle\"> 
                        \t\t\t\t<p class=\"font-weight-bold px-2\">";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 18), "first_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo ", </p>
                        \t\t\t\t<p class=\"sm-grey-text\"> ";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 19), "last_name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo " </p>
                        \t\t\t\t<p class=\"px-3 sm-grey-text\">•</p>
                        \t\t\t\t<p class=\"text-black text-capitalize sm-grey-text\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 21), 21, $this->source), "M d, Y"), "html", null, true);
            echo "</p>
                    \t\t\t\t</div>
                    \t    </div>
                    \t</div>
                    \t<div class=\"col-md-3 pt-1 ml-auto text-left\">
                    \t    
                    \t</div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12 mb-5 mx-auto text-left\">
                                <!--<p>";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "timeToRead", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo " Min</p>-->
                                ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 32), "count", [], "any", false, false, true, 32) > 0)) {
                // line 33
                echo "                                    <div class=\"featured-images text-center pt-4\">
                                        <img class=\"img-fluid rounded\"
                                                    data-src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 35), "first", [], "any", false, false, true, 35), "filename", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "\"
                                                    src=\"";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 36), "first", [], "any", false, true, true, 36), "getThumb", [0 => 1920, 1 => "auto"], "method", true, true, true, 36)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 36), "first", [], "any", false, true, true, 36), "getThumb", [0 => 1920, 1 => "auto"], "method", false, false, true, 36), 36, $this->source), $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg"))), "html", null, true);
                echo "\"
                                                    alt=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 37), "first", [], "any", false, false, true, 37), "description", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\"
                                                    style=\"max-width: 100%; width:100%;\" />
                                    </div>
                                ";
            } else {
                // line 41
                echo "                                    <div class=\"featured-images text-center pt-4\">
                                                <img class=\"img-fluid rounded\"
                                                    data-src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 43), "first", [], "any", false, false, true, 43), "filename", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "\"
                                                    src=\"";
                // line 44
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\"
                                                    alt=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, true, 45), "first", [], "any", false, false, true, 45), "description", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                echo "\"
                                                    style=\"max-width: 100%; width:100%;\" />
                                    </div>
                                ";
            }
            // line 48
            echo "  
                            </div>
            \t\t\t</div>
            \t\t</div>
        \t\t
        \t\t";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["this"] ?? null), "page", [], "any", false, false, true, 53), "url", [], "any", false, false, true, 53) == "/blog/")) {
            // line 54
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t    \t<h1>";
            // line 57
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Glue Up <span class=\"line\"><ins>Insights </ins></span>"]);
            echo "</h1>
        \t\t\t\t<p class=\"tagline ml-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "description", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "</p>
        \t\t\t\t
    \t\t\t";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 60
($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 60)) {
            // line 61
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t\t\t<h1>";
            // line 64
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", true, true, true, 64)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 64), 64, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 64), "title", [], "any", false, false, true, 64), 64, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 64), "title", [], "any", false, false, true, 64))), "html", null, true);
            echo "</h1>
        \t\t\t";
            // line 66
            echo "        \t\t\t</div>\t
    \t\t\t";
        } else {
            // line 68
            echo "    \t\t\t<div class=\"container\">
         \t    <div class=\"row\">
        \t\t\t<div class=\"col-md-7 hero align-self-center text-center mx-auto pt-5\">
        \t\t    \t<h1 class=\"title pt-5\">";
            // line 71
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 71), "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "</h1>
        \t\t\t\t<p class=\"tagline ml-0\">";
            // line 72
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Blog about Glue Up and online communities"]);
            echo "</p>
        \t\t\t</div>\t
    \t\t\t";
        }
        // line 75
        echo "\t\t    </div>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 75,  211 => 72,  207 => 71,  202 => 68,  198 => 66,  194 => 64,  189 => 61,  187 => 60,  182 => 58,  178 => 57,  173 => 54,  171 => 53,  164 => 48,  157 => 45,  153 => 44,  149 => 43,  145 => 41,  138 => 37,  134 => 36,  130 => 35,  126 => 33,  124 => 32,  120 => 31,  107 => 21,  102 => 19,  98 => 18,  88 => 16,  79 => 10,  75 => 9,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/blog/hero-blog.htm", "");
    }
}
