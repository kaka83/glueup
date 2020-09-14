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

/* /var/www/html/glueup/themes/glueup/pages/association-awards-2020-application-form.htm */
class __TwigTemplate_e71af44a8b075d91e9c8b23cadfeed9f0c1375bddcee962beff89a4425bf23c6 extends \Twig\Template
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
        $tags = array("component" => 25);
        $filters = array("media" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['media'],
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
                
                <div class=\"col-md-6 hero align-self-center text-center mx-auto pt-5\">
                      <h1>APAC Association <span class=\"line\"><ins>Awards</ins></span> 2020</h1>
                       ";
        // line 8
        echo "

                </div>
               <img class=\"col-md-offset-12 d-none d-sm-block img-fluid hero-home\" style=\"\" src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-hero1.svg");
        echo "\" alt=\"Glue Up helps you with events, memberships, CRM, email campaigns, finance and marketing tools.\">
            </div>
            <div class=\"row mx-auto\">
             <div class=\"col-md-7 hero align-self-center text-center mx-auto\">
                 
                </div>
            </div>
        </div> 
</div>

<section class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                    <div class=\"col-lg-8 mx-auto pb-4\">
                       \t";
        // line 25
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("awards"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "
                
           \t\t    </div>
       \t\t </div>

    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/pages/association-awards-2020-application-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  92 => 25,  75 => 11,  70 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/pages/association-awards-2020-application-form.htm", "");
    }
}
