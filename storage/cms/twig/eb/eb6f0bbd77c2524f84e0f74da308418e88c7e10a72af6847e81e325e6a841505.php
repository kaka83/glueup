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

/* /var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm */
class __TwigTemplate_2afd92416356e70e79ba968020fa91840e31655d2392d1bf376e6b8815b06581 extends \Twig\Template
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
        $tags = array("if" => 27, "partial" => 61);
        $filters = array("escape" => 22, "default" => 22, "media" => 32, "page" => 41, "theme" => 51);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['escape', 'default', 'media', 'page', 'theme'],
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
        // line 2
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no\">
<link rel=\"preconnect\" href=\"https://vsa98.tawk.to\" />
<link rel=\"preconnect\" href=\"https://hscollectedforms.net\" />
<link rel=\"preconnect\" href=\"https://forms.hubspot.com\" />
<link rel=\"preconnect\" href=\"https://track.hubspot.com\" />
<link rel=\"preconnect\" href=\"https://embed.tawk.to\" />
<link rel=\"preconnect\" href=\"https://tawk.to\" />
<link rel=\"preconnect\" href=\"https://www.googletagmanager.com\" />
<link rel=\"preconnect\" href=\"https://js.hs-analytics.net\" />
<link rel=\"preconnect\" href=\"https://js.hscollectedforms.net\" />
<link rel=\"preconnect\" href=\"https://js.hs-banner.com\" />
<link rel=\"preconnect\" href=\"https://www.google-analytics.com\" />
<link rel=\"preconnect\" href=\"https://static-v.tawk.to\" />
<link rel=\"preconnect\" href=\"https://js.hs-scripts.com\" />
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
<link rel=\"preconnect\" href=\"https://vsa98.tawk.to\" />
";
        // line 20
        echo "
<meta http-equiv=\"X-UA-Compatible\">
<meta name=\"description\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 22), "meta_description", [], "any", true, true, true, 22)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 22), "meta_description", [], "any", false, false, true, 22), 22, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "config", [], "any", false, false, true, 22), "description", [], "any", false, false, true, 22), 22, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 22), "config", [], "any", false, false, true, 22), "description", [], "any", false, false, true, 22))), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 23), "meta_title", [], "any", true, true, true, 23)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 23), "meta_title", [], "any", false, false, true, 23), 23, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "title", [], "any", false, false, true, 23), 23, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 23), "title", [], "any", false, false, true, 23))), "html", null, true);
        echo " - Glue Up\">
<meta name=\"author\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 24), "theme_site_author", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 26), "theme_site_name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\">
";
        // line 27
        if (($context["fbImage"] ?? null)) {
            // line 28
            echo "        <meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 28, $this->source), "html", null, true);
            echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 29, $this->source), "html", null, true);
            echo "\">
        <meta property=\"twitter:image\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 30, $this->source), "html", null, true);
            echo "\" />
";
        } else {
            // line 32
            echo "        <meta property=\"og:image\" content=\"";
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
            // line 33
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\">
        <meta property=\"twitter:image\" content=\"";
            // line 34
            echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
            echo "\" />
";
        }
        // line 38
        echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:title\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 39), "meta_title", [], "any", true, true, true, 39)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 39), "meta_title", [], "any", false, false, true, 39), 39, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "title", [], "any", false, false, true, 39), 39, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "title", [], "any", false, false, true, 39))), "html", null, true);
        echo "\">
<meta property=\"og:description\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 40), "meta_description", [], "any", true, true, true, 40)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 40), "meta_description", [], "any", false, false, true, 40), 40, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 40), "config", [], "any", false, false, true, 40), "description", [], "any", false, false, true, 40), 40, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 40), "config", [], "any", false, false, true, 40), "description", [], "any", false, false, true, 40))), "html", null, true);
        echo "\">
<meta property=\"og:url\" content=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
<title>";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 42), "meta_title", [], "any", true, true, true, 42)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 42), "meta_title", [], "any", false, false, true, 42), 42, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42), 42, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 42), "title", [], "any", false, false, true, 42))), "html", null, true);
        echo " - Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 45), "theme_site_name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\" />
    ";
        // line 47
        echo "    <meta property=\"twitter:description\" content=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 47), "meta_description", [], "any", true, true, true, 47)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 47), "meta_description", [], "any", false, false, true, 47), 47, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "description", [], "any", false, false, true, 47), 47, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "description", [], "any", false, false, true, 47))), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
   
";
        // line 51
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\">
";
        // line 53
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/glueup.css", 2 => "assets/css/style.css", 3 => "assets/css/cookiealert.css"]);
        // line 58
        echo "\" rel=\"stylesheet\">

";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/googletag.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 61,  172 => 58,  169 => 53,  164 => 51,  157 => 47,  153 => 45,  147 => 42,  143 => 41,  139 => 40,  135 => 39,  132 => 38,  127 => 34,  123 => 33,  118 => 32,  113 => 30,  109 => 29,  104 => 28,  102 => 27,  98 => 26,  93 => 24,  89 => 23,  85 => 22,  81 => 20,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/landing/meta-landing.htm", "");
    }
}
