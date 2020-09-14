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

/* /var/www/html/glueup/themes/glueup/partials/elements/logobar.htm */
class __TwigTemplate_86588f26b1fded32fd4e58eabc749f478c0c87513b321a0e5a6c36dc0557be3c extends \Twig\Template
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
        $tags = array();
        $filters = array("_" => 7, "theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'theme'],
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
        echo "<section class=\"\">
        <div class=\"container text-center\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto py-3\">
                        <div class=\"block text-center\">
                          
                             <p class=\"tagline\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Forward-looking teams choose Glue Up "]);
        echo " </p>
                        </div>
                    </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/inland-empire-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/virginia-tech-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/tempe-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                     <img src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/ite-met-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/queens-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logos/greenwich-village-chamber-logo.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
            </div>
            <!--<img src=\"images/client-logos.png\" alt=\"client logos\" class=\"img-fluid\">-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/elements/logobar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  103 => 25,  97 => 22,  91 => 19,  85 => 16,  79 => 13,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/elements/logobar.htm", "");
    }
}
