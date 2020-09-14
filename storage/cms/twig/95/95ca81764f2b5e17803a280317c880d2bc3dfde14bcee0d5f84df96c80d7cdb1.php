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

/* /var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm */
class __TwigTemplate_68d5fcce26452ae25dbc028858288b48e04c05c5ad9e66075550c80855204367 extends \Twig\Template
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
        $tags = array("if" => 6);
        $filters = array("page" => 7, "theme" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
        echo "<div class=\"nav-menu fixed-top position-fixed hello\" style=\"position:fixed;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav class=\"navbar navbar-expand-lg\">
                    ";
        // line 6
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 7
            echo "                    <span class=\"navbar-brand\" style=\"padding: 1rem 0px;\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-zh.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></span>
                    ";
        } else {
            // line 9
            echo "                     <span class=\"navbar-brand\" style=\"padding: 1rem 0px;\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\"><img src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glueup-logo-en.svg");
            echo "\" class=\"logo img-fluid lazyload\" alt=\"logo\" /></span>
                     ";
        }
        // line 11
        echo "                    
                    ";
        // line 13
        echo "                   
                </nav>
            </div>
        </div>
    </div>
     ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 18)) {
            // line 19
            echo "     <div class=\"progress-container\">
                            <div class=\"progress-bar\" id=\"myBar\" value=\"0\" max=\"100\"></div>
                      </div>
    ";
        }
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  99 => 19,  97 => 18,  90 => 13,  87 => 11,  79 => 9,  71 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/header-demo.htm", "");
    }
}
