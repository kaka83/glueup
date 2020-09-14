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

/* /var/www/html/glueup/themes/glueup/partials/site/meta.htm */
class __TwigTemplate_da2f176e346bdc0e72fb6b98330e3cb952008755da8c2b27b2351dafbab1662c extends \Twig\Template
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
        $tags = array("if" => 21);
        $filters = array("raw" => 24, "striptags" => 24, "escape" => 25, "default" => 31, "media" => 31, "page" => 92, "theme" => 103);
        $functions = array("str_limit" => 24, "html_limit" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'striptags', 'escape', 'default', 'media', 'page', 'theme'],
                ['str_limit', 'html_limit']
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
";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, true, 21)) {
            // line 22
            echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 24
            echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, true, 24), 24, $this->source)), 166]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, true, 26), "first_name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 28), "theme_site_name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
";
            // line 30
            echo "
<meta property=\"og:image\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 31), "first", [], "any", false, true, true, 31), "getThumb", [0 => 768, 1 => "auto"], "method", true, true, true, 31)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 31), "first", [], "any", false, true, true, 31), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 31), 31, $this->source), $this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))), "html", null, true);
            echo "\">
<meta property=\"og:image:secure_url\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 32), "first", [], "any", false, true, true, 32), "getThumb", [0 => 768, 1 => "auto"], "method", true, true, true, 32)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, true, true, 32), "first", [], "any", false, true, true, 32), "getThumb", [0 => 768, 1 => "auto"], "method", false, false, true, 32), 32, $this->source), $this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))) : ($this->extensions['System\Twig\Extension']->mediaFilter("meta/glueup-event.png"))), "html", null, true);
            echo "\">

<title>";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo " • Glue Up</title>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["this"] ?? null), "page", [], "any", false, false, true, 35), "url", [], "any", false, false, true, 35) == "/blog/")) {
            // line 36
            echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 37
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 37), "meta_description", [], "any", true, true, true, 37)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 37), "meta_description", [], "any", false, false, true, 37), 37, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 37), "site_description", [], "any", false, false, true, 37), 37, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 37), "site_description", [], "any", false, false, true, 37))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 38), "meta_title", [], "any", true, true, true, 38)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 38), "meta_title", [], "any", false, false, true, 38), 38, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 38), "title", [], "any", false, false, true, 38), 38, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 38), "title", [], "any", false, false, true, 38))), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 39), "theme_site_author", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 41), "theme_site_name", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\">

<title>";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 43), "title", [], "any", true, true, true, 43)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 43), "title", [], "any", false, false, true, 43), 43, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "title", [], "any", false, false, true, 43), 43, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "title", [], "any", false, false, true, 43))), "html", null, true);
            echo " • Glue Up</title>
";
            // line 44
            if (($context["fbImage"] ?? null)) {
                // line 45
                echo "        <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 45, $this->source), "html", null, true);
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 46, $this->source), "html", null, true);
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 47, $this->source), "html", null, true);
                echo "\" />
";
            } else {
                // line 49
                echo "        <meta property=\"og:image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 50
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 51
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" />
";
            }
        } elseif (twig_get_attribute($this->env, $this->source,         // line 53
($context["blogCategories"] ?? null), "categories", [], "any", false, false, true, 53)) {
            // line 54
            echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 55
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, true, 55), 55, $this->source), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 57), "theme_site_author", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 59), "theme_site_name", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\">

<title>";
            // line 61
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", true, true, true, 61)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 61), 61, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 61), "title", [], "any", false, false, true, 61), 61, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 61), "title", [], "any", false, false, true, 61))), "html", null, true);
            echo " • Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 64), "theme_site_name", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            echo " • Glue Up\" />
    <meta property=\"twitter:image\" content=\"";
            // line 65
            echo $this->extensions['System\Twig\Extension']->mediaFilter("glueup-generic.svg");
            echo "\" />
    <meta property=\"twitter:description\" content=\"";
            // line 66
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 66), "meta_description", [], "any", true, true, true, 66)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 66), "meta_description", [], "any", false, false, true, 66), 66, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "description", [], "any", false, false, true, 66), 66, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 66), "description", [], "any", false, false, true, 66))), "html", null, true);
            echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 68
($context["this"] ?? null), "page", [], "any", false, false, true, 68), "url", [], "any", false, false, true, 68) == "/testing/?")) {
            echo "    
<meta name=\"robots\" content=\"noindex, nofollow\">   
";
        } else {
            // line 71
            echo "
<meta http-equiv=\"X-UA-Compatible\">
<meta name=\"description\" content=\"";
            // line 73
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 73), "meta_description", [], "any", true, true, true, 73)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 73), "meta_description", [], "any", false, false, true, 73), 73, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 73), "config", [], "any", false, false, true, 73), "description", [], "any", false, false, true, 73), 73, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 73), "config", [], "any", false, false, true, 73), "description", [], "any", false, false, true, 73))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 74
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 74), "meta_title", [], "any", true, true, true, 74)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 74), "meta_title", [], "any", false, false, true, 74), 74, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 74), "title", [], "any", false, false, true, 74), 74, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 74), "title", [], "any", false, false, true, 74))), "html", null, true);
            echo " • Glue Up\">
<meta name=\"author\" content=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 75), "theme_site_author", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 77), "theme_site_name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\">
";
            // line 78
            if (($context["fbImage"] ?? null)) {
                // line 79
                echo "        <meta property=\"og:image\" content=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 79, $this->source), "html", null, true);
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 80, $this->source), "html", null, true);
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["fbImage"] ?? null), 81, $this->source), "html", null, true);
                echo "\" />
";
            } else {
                // line 83
                echo "        <meta property=\"og:image\" content=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" /> 
        <meta property=\"og:image:secure_url\" content=\"";
                // line 84
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\">
        <meta property=\"twitter:image\" content=\"";
                // line 85
                echo $this->extensions['System\Twig\Extension']->mediaFilter("/meta/glueup-event.png");
                echo "\" />
";
            }
            // line 89
            echo "<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:title\" content=\"";
            // line 90
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 90), "meta_title", [], "any", true, true, true, 90)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 90), "meta_title", [], "any", false, false, true, 90), 90, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 90), "title", [], "any", false, false, true, 90), 90, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 90), "title", [], "any", false, false, true, 90))), "html", null, true);
            echo " • Glue Up\">
<meta property=\"og:description\" content=\"";
            // line 91
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 91), "meta_description", [], "any", true, true, true, 91)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 91), "meta_description", [], "any", false, false, true, 91), 91, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 91), "config", [], "any", false, false, true, 91), "description", [], "any", false, false, true, 91), 91, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 91), "config", [], "any", false, false, true, 91), "description", [], "any", false, false, true, 91))), "html", null, true);
            echo "\">
<meta property=\"og:url\" content=\"";
            // line 92
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">
<title>";
            // line 93
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 93), "meta_title", [], "any", true, true, true, 93)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 93), "meta_title", [], "any", false, false, true, 93), 93, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 93), "title", [], "any", false, false, true, 93), 93, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 93), "title", [], "any", false, false, true, 93))), "html", null, true);
            echo " • Glue Up</title>
 <meta property=\"twitter:card\" content=\"summary_large_image\" />
   <!-- <meta property=\"twitter:site\" content=\"@intercom\" />-->
    <meta property=\"twitter:title\" content=\"";
            // line 96
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 96), "meta_title", [], "any", true, true, true, 96)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 96), "meta_title", [], "any", false, false, true, 96), 96, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 96), "title", [], "any", false, false, true, 96), 96, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 96), "title", [], "any", false, false, true, 96))), "html", null, true);
            echo " • Glue Up\" />
    ";
            // line 98
            echo "    <meta property=\"twitter:description\" content=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 98), "meta_description", [], "any", true, true, true, 98)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 98), "meta_description", [], "any", false, false, true, 98), 98, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 98), "description", [], "any", false, false, true, 98), 98, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 98), "description", [], "any", false, false, true, 98))), "html", null, true);
            echo "\" />
    <link rel=\"canonical\" href=\"https://www.glueup.com\" />
";
        }
        // line 101
        echo "   
";
        // line 103
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Glueup-symbol.svg");
        echo "\">
";
        // line 105
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/glueup.css", 2 => "assets/css/style.css", 3 => "assets/css/cookiealert.css"]);
        // line 110
        echo "\" rel=\"stylesheet\">

";
        // line 113
        echo "<meta name=\"google-site-verification\" content=\"qSkw-c29cDY_garogr01K0G3Ql7YCGCPbx-X3AT3Vvg\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 113,  322 => 110,  319 => 105,  314 => 103,  311 => 101,  304 => 98,  300 => 96,  294 => 93,  290 => 92,  286 => 91,  282 => 90,  279 => 89,  274 => 85,  270 => 84,  265 => 83,  260 => 81,  256 => 80,  251 => 79,  249 => 78,  245 => 77,  240 => 75,  236 => 74,  232 => 73,  228 => 71,  222 => 68,  217 => 66,  213 => 65,  209 => 64,  203 => 61,  198 => 59,  193 => 57,  189 => 56,  185 => 55,  182 => 54,  180 => 53,  175 => 51,  171 => 50,  166 => 49,  161 => 47,  157 => 46,  152 => 45,  150 => 44,  146 => 43,  141 => 41,  136 => 39,  132 => 38,  128 => 37,  125 => 36,  123 => 35,  119 => 34,  114 => 32,  110 => 31,  107 => 30,  103 => 28,  98 => 26,  94 => 25,  90 => 24,  86 => 22,  84 => 21,  81 => 20,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/meta.htm", "");
    }
}
