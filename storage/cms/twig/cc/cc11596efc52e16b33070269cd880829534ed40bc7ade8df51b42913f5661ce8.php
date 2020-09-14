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

/* /var/www/html/glueup/themes/glueup/pages/blog.htm */
class __TwigTemplate_c5f7cb49ee5224c620fa0006a3a3da7175a41025a58d6a8626c53eb7cca4e1d9 extends \Twig\Template
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
        $tags = array("partial" => 1, "set" => 5, "for" => 6, "if" => 8);
        $filters = array("escape" => 7, "media" => 11, "_" => 23, "raw" => 127, "striptags" => 127);
        $functions = array("url" => 102, "str_limit" => 127);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for', 'if'],
                ['escape', 'media', '_', 'raw', 'striptags'],
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
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/hero-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<div class=\"container py-5 blog\">
            <div class=\"row\">
                  <div class=\"col-md-7 hero blog align-self-center mr-auto pb-2\">
                  ";
        // line 5
        $context["featured"] = twig_get_attribute($this->env, $this->source, ($context["featured"] ?? null), "posts", [], "any", false, false, true, 5);
        // line 6
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["featured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "  
                                        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "\" class=\"\">
                                                ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 8), "count", [], "any", false, false, true, 8) > 0)) {
                // line 9
                echo "                                                <img class=\"rounded highlight-img\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9), "last", [], "any", false, false, true, 9), "getThumb", [0 => ($context["auto"] ?? null), 1 => 540], "method", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" />
                                                ";
            } else {
                // line 11
                echo "                                                <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                                                ";
            }
            // line 13
            echo "                                            </a>
                                        <h1 class=\"pt-3 blog\">
                                            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</a>
                                        </h1>
                        
                                        ";
            // line 23
            echo "                                         <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" class=\"read-more d-flex\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Turn the page"]);
            echo " <i class=\"read-more-icon icon-arrow\"></i></a>
                                    
                                    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                  </div>
                  <div class=\"col-md-4 hero ml-auto pb-2\">
                  <div class=\"row pb-4 mx-auto\">
                      ";
        // line 30
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventPosts"] ?? null), "posts", [], "any", false, false, true, 30), "slice", [0 => 0, 1 => 1], "method", false, false, true, 30);
        // line 31
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 32), "slice", [0 => 0, 1 => 1], "method", false, false, true, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["dump"] ?? null), "category", [], "method", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</a>
                                                </h4>
                                    
                                                ";
            // line 46
            echo "                                                
                                                 
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                  </div>
                   <div class=\"row pb-4 mx-auto\">
                      ";
        // line 51
        $context["memberships"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["membershipPosts"] ?? null), "posts", [], "any", false, false, true, 51), "slice", [0 => 0, 1 => 1], "method", false, false, true, 51);
        // line 52
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberships"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 53
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 53), "slice", [0 => 0, 1 => 1], "method", false, false, true, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 54
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "</a>
                                                </h4>
                                
                                                ";
            // line 67
            echo "                                                
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                  </div>
                  <div class=\"row pb-4 mx-auto\">
                      ";
        // line 72
        $context["press"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pressPosts"] ?? null), "posts", [], "any", false, false, true, 72), "slice", [0 => 0, 1 => 1], "method", false, false, true, 72);
        // line 73
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["press"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 74
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 74), "slice", [0 => 0, 1 => 1], "method", false, false, true, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 75
                echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "\"  class=\"read-more d-flex\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "</a>
                                                        </span>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                                <h4 class=\"\">
                                                    <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</a>
                                                </h4>
                                
                                                ";
            // line 88
            echo "                                                
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                  </div>
                  
                  </div>
        </div>
    </div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12 hero ml-auto pb-2\">
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 102
        echo url("/blog/");
        echo "/category/event-management\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Event Management"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      
                      ";
        // line 108
        $context["events"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eventPosts"] ?? null), "posts", [], "any", false, false, true, 108), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, true, 108);
        // line 109
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["events"] ?? null), "post", [], "any", false, false, true, 109), "slice", [0 => 0, 1 => 1], "method", false, false, true, 109), "categories", [], "any", false, false, true, 109), "slice", [0 => 0, 1 => 1], "method", false, false, true, 109));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 110
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 115
            echo "                                                
                                                <div class=\"col-md-3 hero pb-2\">
                                              <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 118), "count", [], "any", false, false, true, 118) > 0)) {
                // line 119
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 119), "last", [], "any", false, false, true, 119), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 119), 119, $this->source), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 121
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 123
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 127
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 127), 127, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 133
            echo "                                                </div>
                                                
                                                 
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                  </div>
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 141
        echo url("/blog/");
        echo "/category/associations-amp-chambers\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Membership Management"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 146
        $context["memberships"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["membershipPosts"] ?? null), "posts", [], "any", false, false, true, 146), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, true, 146);
        // line 147
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 147), "slice", [0 => 0, 1 => 1], "method", false, false, true, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["memberships"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 153
            echo "                                                <div class=\"col-md-3 hero pb-2\">
                                            <a href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 154), 154, $this->source), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 155), "count", [], "any", false, false, true, 155) > 0)) {
                // line 156
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 156), "last", [], "any", false, false, true, 156), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 156), 156, $this->source), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 158
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 160
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                               <p class=\"excerpt\">";
            // line 164
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 164), 164, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 170
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                  </div>
                  <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 177
        echo url("/blog/");
        echo "/category/donations-fundraising-ngos\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Donations, Fundraising, & NGOs"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 182
        $context["ngo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ngoPosts"] ?? null), "posts", [], "any", false, false, true, 182), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, true, 182);
        // line 183
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 183), "slice", [0 => 0, 1 => 1], "method", false, false, true, 183));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 184
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ngo"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 189
            echo "                              
                                                <div class=\"col-md-3 hero pb-2\">
                                                <a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 192), "count", [], "any", false, false, true, 192) > 0)) {
                // line 193
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 193), "last", [], "any", false, false, true, 193), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 193), 193, $this->source), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 195
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 197
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 201
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 201), 201, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 207
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "                  </div>
                   <div class=\"row pt-5 pb-2\">
                      <div class=\"col-md-12\">
                      <span class=\"text-muted text-capitalize mr-3 pb-3\">
                          <a href=\"";
        // line 214
        echo url("/blog/");
        echo "/category/virtual-events-webinars\"  class=\"read-more d-flex\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Virtual Events & Webinars"]);
        echo "</a>
                      </span>
                      </div>
                  </div>
                  <div class=\"row pt-2 pb-5\">
                      ";
        // line 219
        $context["training"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["trainingPosts"] ?? null), "posts", [], "any", false, false, true, 219), "slice", [0 => 1, 1 => ($context["All"] ?? null)], "method", false, false, true, 219);
        // line 220
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, true, 220), "slice", [0 => 0, 1 => 1], "method", false, false, true, 220));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 221
            echo "                                                 <span class=\"text-muted text-capitalize mr-3 pb-3\">
                                                            <a href=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
            echo "\"  class=\"read-more d-flex\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 222), 222, $this->source), "html", null, true);
            echo "</a>
                                                        </span>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["training"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 226
            echo "                              
                                                <div class=\"col-md-3 hero pb-2\">
                                                <a href=\"";
            // line 228
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "\" class=\"\">
                        ";
            // line 229
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 229), "count", [], "any", false, false, true, 229) > 0)) {
                // line 230
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 230), "last", [], "any", false, false, true, 230), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 230), 230, $this->source), "html", null, true);
                echo "\" />
                        ";
            } else {
                // line 232
                echo "                        <img class=\"media-object img-fluid rounded\" src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
                echo "\" />
                        ";
            }
            // line 234
            echo "                         </a>
                                                <h5 class=\"pt-2\">
                                                    <a href=\"";
            // line 236
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"excerpt\">";
            // line 238
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "content_html", [], "any", false, false, true, 238), 238, $this->source)), 150]);
            echo "</p>
                                                ";
            // line 244
            echo "                                                </div>
                                                
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                  </div>
                  
            </div>        
 </div>
            </div>
            ";
        // line 252
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/footer-blog.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 252,  628 => 247,  620 => 244,  616 => 238,  609 => 236,  605 => 234,  599 => 232,  593 => 230,  591 => 229,  587 => 228,  583 => 226,  578 => 225,  567 => 222,  564 => 221,  559 => 220,  557 => 219,  547 => 214,  541 => 210,  533 => 207,  529 => 201,  522 => 199,  518 => 197,  512 => 195,  506 => 193,  504 => 192,  500 => 191,  496 => 189,  491 => 188,  480 => 185,  477 => 184,  472 => 183,  470 => 182,  460 => 177,  454 => 173,  446 => 170,  442 => 164,  435 => 162,  431 => 160,  425 => 158,  419 => 156,  417 => 155,  413 => 154,  410 => 153,  405 => 152,  394 => 149,  391 => 148,  386 => 147,  384 => 146,  374 => 141,  368 => 137,  359 => 133,  355 => 127,  348 => 125,  344 => 123,  338 => 121,  332 => 119,  330 => 118,  326 => 117,  322 => 115,  317 => 114,  306 => 111,  303 => 110,  298 => 109,  296 => 108,  285 => 102,  272 => 91,  264 => 88,  256 => 80,  253 => 79,  242 => 76,  239 => 75,  234 => 74,  229 => 73,  227 => 72,  223 => 70,  215 => 67,  207 => 59,  204 => 58,  193 => 55,  190 => 54,  185 => 53,  180 => 52,  178 => 51,  174 => 49,  166 => 46,  158 => 38,  155 => 37,  143 => 34,  140 => 33,  135 => 32,  130 => 31,  128 => 30,  123 => 27,  110 => 23,  102 => 15,  98 => 13,  92 => 11,  86 => 9,  84 => 8,  80 => 7,  73 => 6,  71 => 5,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/blog.htm", "");
    }
}
