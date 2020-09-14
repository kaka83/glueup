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

/* /var/www/html/glueup/themes/glueup/partials/pricing/default.htm */
class __TwigTemplate_3873de43fda6d80285a75282be1bc9a99dea403e48d86f74ceb95ff859c13a9e extends \Twig\Template
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
        $tags = array("partial" => 48);
        $filters = array("theme" => 17, "_" => 19, "escape" => 21);
        $functions = array("form_token" => 23);

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme', '_', 'escape'],
                ['form_token']
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
        echo "<!-- // Modal -->
    <div id=\"pricing\" class=\"modal fade centered-modal\" role=\"dialog\" >
                <div class=\"modal-dialog\">
                
                    <!-- Modal content-->
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            
                          
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>
                        <div class=\"modal-body\">
                                          <!--  <div class=\"container paygage-hero-container\">
                                
                                   
                                    <div class=\"col-md-6 align-items-center align-self-center\">-->
                                          <img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\" class=\"paygage-visual\" style=\"max-width:40px; height:auto;\" alt=\"paygage logo\">
                                          </br>
                                     <h4 id=\"pricing-title\" class=\"t-5 modal-title\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["The Price is right"]);
        echo " </h4>
                                     <p id=\"pricing-subtitle\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Our pricing is value-based to reflect the diverse needs of organizations we work with. "]);
        echo "</p>
                        <form data-request=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 21, $this->source), "html", null, true);
        echo "::onFormSubmit\" id=\"pricing_form\">
                        
                            ";
        // line 23
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
                        
                            <div id=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 25, $this->source), "html", null, true);
        echo "_forms_flash\"></div>
                        
                            <div class=\"form-group\">
                                <label for=\"full_name\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Full Name"]);
        echo "</label>
                                <input type=\"text\" id=\"full_name\" name=\"full_name\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"phone\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone Number"]);
        echo "</label>
                                <input type=\"text\" id=\"phone\" name=\"phone\" class=\"form-control\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"email\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email Address"]);
        echo "</label>
                                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"solution\">";
        // line 40
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Solution"]);
        echo "</label>
                                <input type=\"text\" id=\"solution\" name=\"solution_buying\" class=\"form-control\" value=\"\" readonly=\"readonly\">
                            </div>
\t\t\t    <div class=\"form-group\">
                                <label for=\"company\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Company Name"]);
        echo "</label>
                                <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"\" placeholder=\"";
        // line 45
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), [""]);
        echo "\">
                            </div>
                            
 ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/hidden-fields-form.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "                           ";
        // line 60
        echo "                        
                          
                        
                            <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn btn-primary\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Get a Quote"]);
        echo "</button>
                        
                        </form>
                                </div>
                            </div> 
     
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- // Modal -->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/pricing/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  153 => 60,  151 => 49,  147 => 48,  141 => 45,  137 => 44,  130 => 40,  123 => 36,  116 => 32,  109 => 28,  103 => 25,  98 => 23,  93 => 21,  89 => 20,  85 => 19,  80 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/pricing/default.htm", "");
    }
}
