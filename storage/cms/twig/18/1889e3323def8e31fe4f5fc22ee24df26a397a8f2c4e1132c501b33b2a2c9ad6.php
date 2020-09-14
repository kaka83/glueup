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

/* /var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm */
class __TwigTemplate_42134d5ed2204365d8e838183f063324a74437c6f809261e93213cd240ea3fb3 extends \Twig\Template
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
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"country\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"country\" name=\"country\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["country"] ?? null), 3, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["country"] ?? null), 3, $this->source), "html", null, true);
        echo "\" aria-label=\"country\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
                            \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"office\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"hidden\" id=\"office\" name=\"office\" placeholder=\"\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["office"] ?? null), 7, $this->source), "html", null, true);
        echo "\" aria-label=\"office\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>
\t\t\t\t\t\t\t    
                          \t<div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
                                <label for=\"url_from\" style=\"visibility:hidden;\"> </label>
                        \t <input type=\"text\" id=\"websitesource\" name=\"url_from\" placeholder=\"websitesource\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "baseFileName", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "\" aria-label=\"url_from\" class=\"form-control has_background\" style=\"visibility:hidden;\">
                          \t</div>


    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label foip_user\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"ip_user\" namip_user\" placeholder=\"ip_user\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["ip_Address"] ?? null), 18, $this->source), "html", null, true);
        echo "\" aria-label=\"language\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_source\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_source\" name=\"utm_source\" placeholder=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmSource"] ?? null), 23, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmSource"] ?? null), 23, $this->source), "html", null, true);
        echo "\" aria-label=\"utm_source\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>


  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_medium\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_medium\" name=\"utm_medium\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmMedium"] ?? null), 29, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmMedium"] ?? null), 29, $this->source), "html", null, true);
        echo "\" aria-label=\"utm_medium\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

  <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_campaign\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_campaign\" name=\"utm_campaign\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmCampaign"] ?? null), 34, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmCampaign"] ?? null), 34, $this->source), "html", null, true);
        echo "\" aria-label=\"utm_campaign\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_term\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_term\" name=\"utm_term\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmTerm"] ?? null), 39, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmTerm"] ?? null), 39, $this->source), "html", null, true);
        echo "\" aria-label=\"utm_term\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"utm_content\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"utm_content\" name=\"utm_content\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmContent"] ?? null), 44, $this->source), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["utmContent"] ?? null), 44, $this->source), "html", null, true);
        echo "\" aria-label=\"utm_content\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>

    <div class=\"form-group\" style=\"visibility:hidden; max-height: 1px; margin:0;\">
  <label for=\"language\" style=\"visibility:hidden;\"> </label>
   <input type=\"text\" id=\"hs_language\" name=\"language\" placeholder=\"hs_language\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocale"] ?? null), 49, $this->source), "html", null, true);
        echo "\" aria-label=\"language\" class=\"form-control has_background\" style=\"visibility:hidden;\">
  </div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 49,  141 => 44,  131 => 39,  121 => 34,  111 => 29,  100 => 23,  92 => 18,  83 => 12,  75 => 7,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/hidden-fields-form.htm", "");
    }
}
