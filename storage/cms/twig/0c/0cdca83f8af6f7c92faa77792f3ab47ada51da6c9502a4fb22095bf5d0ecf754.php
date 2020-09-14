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

/* /var/www/html/glueup/themes/glueup/partials/industry/industry-case-study.htm */
class __TwigTemplate_7b957a01d6eef34794da8a481ea53cd92389f5b460c0f5fb40b400158ee9bc39 extends \Twig\Template
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
        $tags = array("set" => 4, "for" => 5, "if" => 14);
        $filters = array("slice" => 5, "escape" => 13);
        $functions = array("url" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['slice', 'escape'],
                ['url']
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
        // line 3
        echo "
";
        // line 4
        $context["casestudies"] = ($context["filteredPosts"] ?? null);
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["casestudies"] ?? null), 0, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " 
        
                <div class=\"col-lg-5 col-md-4 mb-5 h-10 mx-auto pb-5\">
                    <div class=\"mb-3\">
                      <div class=\"row no-gutters\">
                       
                        <div class=\"col-md-12\">
                          <div class=\"card-body\">
                          \t<a href=\"";
            // line 13
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\" class=\"\">
                                ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 14), "count", [], "any", false, false, true, 14) > 1)) {
                // line 15
                echo "                                <img class=\"mr-2\" style=\"height: auto; width: auto; max-height: 60px;\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 15), "last", [], "any", false, false, true, 15), "getThumb", [0 => ($context["auto"] ?? null), 1 => 540], "method", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 15), "last", [], "any", false, false, true, 15), "getThumb", [0 => ($context["auto"] ?? null), 1 => 540], "method", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\"/>
                                ";
                // line 17
                echo "                                ";
            } else {
                // line 18
                echo "                                <img class=\"mr-2\" style=\"height:60px; width:60px;\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 18), "avatar", [], "any", false, false, true, 18), "file_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 18), "avatar", [], "any", false, false, true, 18), "getThumb", [0 => 120, 1 => "auto"], "method", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 18), "first_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, true, 18), "last_name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "\"/>
                                ";
            }
            // line 20
            echo "                                 </a>
                            <p class=\"excerpt\">";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</p>  
                            <h5 class=\"card-title\"><a href=\"";
            // line 22
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</a></h5>
                            <a href=\"";
            // line 23
            echo url("/blog/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" class=\"read-more d-flex\">Read their story <i class=\"read-more-icon icon-arrow\"></i></a>
                          </div>
                        </div>
                      </div>
                   
                    </div>
                </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/industry/industry-case-study.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  128 => 23,  120 => 22,  116 => 21,  113 => 20,  102 => 18,  99 => 17,  90 => 15,  88 => 14,  82 => 13,  67 => 5,  65 => 4,  62 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/industry/industry-case-study.htm", "");
    }
}
