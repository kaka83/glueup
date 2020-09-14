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

/* /var/www/html/glueup/themes/glueup/pages/rebranding.htm */
class __TwigTemplate_91cf33721a1092b31f8c42dc120569e0db9ee226f7d93c875a6850c07ecd71f8 extends \Twig\Template
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
        $tags = array("if" => 19, "content" => 26, "partial" => 34);
        $filters = array("_" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'content', 'partial'],
                ['_'],
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
        <div class=\"container\">
            <div class=\"row pt-5\">
                
                <div class=\"col-md-8 hero align-self-center text-left mx-auto pt-5\">
                      <h1 class=\"pb-5 text-center\">";
        // line 6
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["EventBank is now <span class=\"line\"><ins>Glue Up!</ins></span>"]);
        echo "</h1>
                       ";
        // line 8
        echo "
\t\t\t\t\t";
        // line 10
        echo "\t\t\t\t\t\t";
        // line 19
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 20
            echo "<iframe width=\"100%\" height=\"411px\" src=\"//player.bilibili.com/player.html?aid=669430745&bvid=BV1ga4y1E7oP&cid=229098143&autoplay=1\" scrolling=\"no\" border=\"0\" frameborder=\"no\" framespacing=\"0\" allowfullscreen=\"true\"> </iframe>
";
        } else {
            // line 22
            if (twig_in_filter(($context["Location"] ?? null), [0 => "CN"])) {
                // line 23
                echo "<iframe width=\"100%\" height=\"411px\" src=\"//player.bilibili.com/player.html?aid=669430745&bvid=BV1ga4y1E7oP&cid=229098143&autoplay=1\" scrolling=\"no\" border=\"0\" frameborder=\"no\" framespacing=\"0\" allowfullscreen=\"true\"> </iframe>
";
            } else {
                // line 25
                echo "\t\t\t\t\t\t<iframe width=\"100%\" height=\"411px\" src=\"https://www.youtube.com/embed/3A7VFKEiod4?autoplay=1\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe> ";
            }
        }
        // line 26
        echo "\t\t\t\t\t\t";
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("brand-toolkit-2"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 27
        echo "\t\t\t\t\t
                </div>
               
            </div>
        </div> 
</div>
";
        // line 33
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 34
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/toolkit.zh.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } elseif ((        // line 35
($context["activeLocale"] ?? null) === "es_la")) {
            // line 36
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/toolkit.es_la.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } elseif ((        // line 37
($context["activeLocale"] ?? null) === "ru")) {
            // line 38
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/toolkit.ru.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } else {
            // line 40
            echo "\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("landing/toolkit"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 42
        echo "
";
        // line 367
        echo "
";
        // line 368
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/pricing-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 369
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("platform/features-nav.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 370
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("solutions/footer-cta-mem.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/rebranding.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 370,  145 => 369,  141 => 368,  138 => 367,  135 => 42,  129 => 40,  123 => 38,  121 => 37,  116 => 36,  114 => 35,  109 => 34,  107 => 33,  99 => 27,  94 => 26,  90 => 25,  86 => 23,  84 => 22,  80 => 20,  78 => 19,  76 => 10,  73 => 8,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/rebranding.htm", "");
    }
}
