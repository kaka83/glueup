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

/* /var/www/html/glueup/themes/glueup/partials/site/footer-cta.htm */
class __TwigTemplate_b2447f8cacb6b3ff47fcefd35880f0c2601b9a04a2aa2ad6eb8a0620d2e0e145 extends \Twig\Template
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
        $filters = array("theme" => 26, "_" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', '_'],
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
        echo "<!-- Section CTA End -->
";
        // line 22
        echo "
<section class=\"mt-70 \" id=\"pricing\">

\t<div class=\"container bg-grey rounded position-relative\"  style=\"overflow:hidden;\">
\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" class=\"bg-logo\" alt=\"logo\">
        <div class=\"cta-block-2 p-xs-2 p-md-5 rounded\">
            <div class=\"row justify-content-center text-center align-items-center\">
                <div class=\"col-lg-10 mx-auto\">
                    <h2 class=\"p-4 mb-lg-0 text-center display-4 font-weight-bold\">";
        // line 30
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Great engagement starts <span class=\"line\"><ins>here</ins></span>"]);
        echo "</h2>
                </div>
            </div>
            <div class=\"row justify-content-center text-center align-items-center\">
                <div class=\"col-lg-5 mx-auto pt-3\">
                    <div class=\"input-group mb-3\">
                        <input type=\"text\" id=\"email-bottom\" name=\"email\" placeholder=\"";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Your Email"]);
        echo "\" aria-label=\"email\" class=\"form-control has_background\">
                      <div class=\"input-group-append\">
                        <button class=\"btn btn-primary btn-round-full pointer\" value=\"Submit\" id=\"emailtomodal\" input-type=\"submit\" data-toggle=\"modal\" data-target=\"#contact-paygage\">";
        // line 38
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get Started"]);
        echo "</button>
                      </div>
                    </div>
                    ";
        // line 42
        echo "                </div>
            </div>
             <div class=\"row justify-content-center text-center align-items-center pb-5 pt-0\">
                <div class=\"col-lg-8 mx-auto\">
                   <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i>";
        // line 46
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["All-in-One"]);
        echo " </span>
                    <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i>";
        // line 47
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Cloud based"]);
        echo "</span>
                     <span class=\"text-center small px-2\"><i class=\"align-middle icon-check\"></i> ";
        // line 48
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["User-centric"]);
        echo "</span>
                </div>
                
            </div>
                                
                     
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/footer-cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 48,  108 => 47,  104 => 46,  98 => 42,  92 => 38,  87 => 36,  78 => 30,  71 => 26,  65 => 22,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/footer-cta.htm", "");
    }
}
