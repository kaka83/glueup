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

/* /var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm */
class __TwigTemplate_5fd1fce1e567909163320c159caa747f075ef3cb1f10033dc22d0f7d63ac9805 extends \Twig\Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
        if ((($context["activeLocale"] ?? null) === "zh")) {
            // line 2
            echo "<!-- specific css for chinese language active -->
<style>

body, p, h3, h4, .timeline h2 {
\tletter-spacing:0px;
\tline-height: 1.5em!important;
/*\ttext-align: justify!important;*/
/*word-break: break-all;
 white-space: keep-all;
 orphans: 3;*/
 
}
#hero svg.svgline {
    position: absolute;
    margin-right: -110%;
    margin-top: 5.5vh;
}
.secondary-top-nav select.form-control:not([size]):not([multiple]) {
   /* height: 2rem;
    padding: .5rem 1rem;
    font-weight: lighter;
        margin-top: 7px;*/
            height: calc(2.8rem + 8px);
}
.dot-info span.year {
    bottom: -30px;
    left: 50%;
    transform: translateX(0%);
    width: 100px;
}/*
h1 {
\tline-height: 1.3em!important;
/*\tmax-width: 18ch;*/
}/*
p { margin-after: 0.5em;
word-break: break-all;
 white-space: keep-all;
}
.tagline {max-width: 47ch;}

@media print {
  p {
    orphans: 3;
  }
  h1 {
    orphans: 3;
  }
}
em { font-style: normal; }
}
/*p { margin: 0; text-indent: 2em;}*/
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/glueup/themes/glueup/partials/site/language-exclusions.htm", "");
    }
}
