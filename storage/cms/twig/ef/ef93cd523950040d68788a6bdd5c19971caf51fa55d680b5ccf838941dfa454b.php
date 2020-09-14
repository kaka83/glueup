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

/* /var/www/html/glueup/themes/glueup/partials/logos/logobar-home.htm */
class __TwigTemplate_a0360882eaa05b19a52193192ae9f4f893cd7667109edc7d0adbedc0da632fa5 extends \Twig\Template
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
        $filters = array("_" => 7, "media" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['_', 'media'],
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
        // line 14
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-8.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 17
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-4.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                     <img src=\"";
        // line 20
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-27.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 23
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-16.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 26
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-25.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
                <div class=\"col-md-2 client-logo align-self-center\">
                    <img src=\"";
        // line 29
        echo $this->extensions['System\Twig\Extension']->mediaFilter("/clients/glueup-client-logo-9.png");
        echo "\" class=\"img-fluid\" alt=\"logo\">
                </div>
            </div>
            <!--<img src=\"images/client-logos.png\" alt=\"client logos\" class=\"img-fluid\">-->
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/logos/logobar-home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 29,  104 => 26,  98 => 23,  92 => 20,  86 => 17,  80 => 14,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/logos/logobar-home.htm", "");
    }
}
